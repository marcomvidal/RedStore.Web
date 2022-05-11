FROM php:8.1-apache
LABEL Name=RedStore Version=0.0.1

# Arguments defined in docker-compose.yml
ARG user
ARG uid
ARG document_root

# Install system dependencies
RUN apt-get update \
    && apt-get install -y \
    libpq-dev git curl libpng-dev libonig-dev libxml2-dev zip unzip

# Configure system dependencies
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Direct document root to the /public directory
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e "s!/var/www/html!${document_root}!g" /etc/apache2/sites-available/*.conf
RUN sed -ri -e "s!/var/www/!${document_root}!g" /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Allow URLs rewriting and Access-Control-Allow-Origin headers
RUN a2enmod rewrite headers

# Create system user to run Composer and Artisan commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Get latest Composer version
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html
USER $user
