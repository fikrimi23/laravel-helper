<?php

namespace Fikrimi\LaravelHelper;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //$this->loadRoutesFrom(__DIR__ . '/routes.php');
        //$this->loadMigrationsFrom(__DIR__ . '/Databases/migrations');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include_once __DIR__ . '/GeneralHelper.php';
        include_once __DIR__ . '/ArbitraryHelper.php';
        include_once __DIR__ . '/UrlHelper.php';
        include_once __DIR__ . '/StringHelper.php';
        include_once __DIR__ . '/FormHelper.php';
    }
}
