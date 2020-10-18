<?php

namespace Agweria\Mpesa;

use Agweria\Mpesa\Commands\CreateAppCommand;
use Agweria\Mpesa\Commands\RegisterUrl;
use Illuminate\Support\ServiceProvider;

class MpesaServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'agweria');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'agweria');
         $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
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
        $this->mergeConfigFrom(__DIR__ . '/../config/agweria.mpesa.php', 'agweria.mpesa');

        $this->commands([
            CreateAppCommand::class,
            RegisterUrl::class
        ]);

        // Register the service the package provides.
        $this->app->singleton('mpesa', function ($app) {
            return new Mpesa;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['mpesa'];
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
            __DIR__ . '/../config/agweria.mpesa.php' => config_path('agweria.mpesa.php'),
        ], 'agweria.mpesa.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/agweria'),
        ], 'mpesa.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/agweria'),
        ], 'mpesa.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/agweria'),
        ], 'mpesa.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
