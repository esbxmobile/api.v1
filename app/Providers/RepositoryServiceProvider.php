<?php

namespace Api\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Api\Repositories\UserRepository',
            'Api\Repositories\UserRepositoryEloquent'
        );

        $this->app->bind(
            'Api\Repositories\BoxRepository',
            'Api\Repositories\BoxRepositoryEloquent'
        );

        $this->app->bind(
            'Api\Repositories\PhotoBoxRepository',
            'Api\Repositories\PhotoBoxRepositoryEloquent'
        );

        $this->app->bind(
            'Api\Repositories\VehicleRepository',
            'Api\Repositories\VehicleRepositoryEloquent'
        );

    }
}
