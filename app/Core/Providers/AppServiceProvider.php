<?php

namespace App\Core\Providers;

use Illuminate\Support\ServiceProvider;
use App\Core\Factory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\Illuminate\Database\Eloquent\Factory::class, function () {
            return Factory::construct(\Faker\Factory::create('pt_BR'), [
                'app/Modules/Admin/Database/Factories',
                'app/Modules/Site/Database/Factories',
            ]);
        });

    }
}
