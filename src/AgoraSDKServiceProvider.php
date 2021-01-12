<?php

namespace Willywes\AgoraSDK;

use Illuminate\Support\ServiceProvider;

class AgoraSDKServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'willywes');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'willywes');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/agorasdk.php', 'agorasdk');

        // Register the service the package provides.
        $this->app->singleton('agorasdk', function ($app) {
            return new AgoraSDK;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['agorasdk'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/agorasdk.php' => config_path('agorasdk.php'),
        ], 'agorasdk.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/willywes'),
        ], 'agorasdk.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/willywes'),
        ], 'agorasdk.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/willywes'),
        ], 'agorasdk.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
