<?php

namespace App\Providers;

use App\Faker\ProductNameProvider;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
                
            $faker->addProvider(new ProductNameProvider($faker));

            return $faker;
        });
    }
}
