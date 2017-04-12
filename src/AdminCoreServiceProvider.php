<?php

namespace Escapeboy\AdminCore;

use Illuminate\Support\ServiceProvider;

class AdminCoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'admincore');
        $this->publishes([
            	__DIR__.'/views' => base_path('resources/views/escapeboy/admin-core'),
        	]);
        $this->publishes([
                __DIR__.'/assets' => public_path('assets/escapeboy/dashboard'),
        	], 'public');
        $this->publishes([
                __DIR__.'/../config/admincore.php' => config_path('admincore.php')
            ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->mergeConfigFrom(
                __DIR__.'/../config/admincore.php', 'admincore'
            );
        $this->app->make('Escapeboy\AdminCore\AdminCoreController');
    }
}
