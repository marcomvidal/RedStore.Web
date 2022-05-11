FROM php:8.1-apache
LABEL Name=RedStore Version=0.0.1

# Install PostgresSQL PDO
RUN apt-get update
RUN apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql