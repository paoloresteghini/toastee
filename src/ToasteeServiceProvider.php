<?php

namespace Paolor\Toastee;

use Illuminate\Support\ServiceProvider;

class ToasteeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        // Register the config file for publishing
        $this->mergeConfigFrom(__DIR__.'/../config/toastee.php', 'toastee');

        // Register the main class to use with the facade
        $this->app->singleton('toastee', function () {
            return new Toastee;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Publish the configuration file
        $this->publishes([
            __DIR__.'/../config/toastee.php' => config_path('toastee.php'),
        ], 'config');

        // Publish the view file
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/toastee'),
        ], 'views');

        // Load the view files
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'toastee');
    }
}