<?php

namespace Jaypanchal\Apitester;

use Illuminate\Support\ServiceProvider;

class ApiTesterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Jaypanchal\Apitester\APITestingController');
        
    } 

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'apitester');
    }
}
