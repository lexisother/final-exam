<?php

namespace App\Providers;

use Faker\Provider\FakeCar;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $faker = fake();
        $faker->addProvider(new FakeCar($faker));
    }
}
