<?php

namespace App\Providers;

use App\Http\Repositories\CityCityRepository;
use App\Http\Repositories\CityRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
    CityRepositoryInterface::class,
    CityCityRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
