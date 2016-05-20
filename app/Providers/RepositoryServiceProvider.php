<?php

namespace Admin\Providers;

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
        $this->app->bind('Admin\Repositories\UserRepository',
            'Admin\Repositories\UserRepositoryEloquent'
        );

        $this->app->bind('Admin\Repositories\ServicoRepository',
            'Admin\Repositories\ServicoRepositoryEloquent'
        );

        $this->app->bind('Admin\Repositories\ClienteRepository',
            'Admin\Repositories\ClienteRepositoryEloquent'
        );
    }
}

