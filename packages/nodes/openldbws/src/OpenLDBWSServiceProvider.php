<?php

namespace Nodes\OpenLDBWS;

use Illuminate\Support\ServiceProvider;

class OpenLDBWSServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['OpenLDBWS'] = $this->app->share(function($app) {
            return new OpenLDBWS;
        });
    }
}