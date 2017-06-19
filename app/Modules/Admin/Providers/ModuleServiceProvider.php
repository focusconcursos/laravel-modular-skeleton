<?php

namespace App\Modules\Admin\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


class ModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mapWebRoutes();
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
        $this->loadViewsFrom(__DIR__.'/../Views', 'admin');
    }

    public function register()
    {
        // binds
    }

        private function mapWebRoutes()
    {
        Route::group([
            'middleware'    => 'web',
            'namespace'     => 'App\Modules\Admin\Http\Controllers',
            'prefix'        => 'admin',
            'as'            => 'admin.'
        ], function ($router) {
            require app_path('Modules/Admin/Http/routes.php');
        });
    }
}