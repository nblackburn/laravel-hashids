<?php

namespace LaravelHashids\Providers;

use Hashids\Hashids;
use Illuminate\Support\ServiceProvider;

/**
 * LaravelServiceProvider.
 *
 * @author Nathaniel Blackburn <support@nblackburn.uk> (http://nblackburn.uk)
 */
class LaravelServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Check the config_path method exists.
        if (function_exists('config_path')) {
            $this->publishes([
                __DIR__.'/../../config/hashids.php' => config_path('hashids.php'),
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Merge the configurations.
        $this->mergeConfigFrom(__DIR__.'/../../config/hashids.php', 'hashids');

        // Bind to the IoC container.
        $this->app->singleton('hashids', function () {
            // Pass the configuration and return the instance.
            return new Hashids(config('hashids.salt'), config('hashids.length'), config('hashids.alphabet'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'hashids',
        ];
    }
}
