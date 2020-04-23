<?php


namespace App\Http\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Repositories\RepositoriesInterface',
            'App\Repositories\CityRepository'
        );
    }
}
