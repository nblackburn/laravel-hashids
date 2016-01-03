<?php

namespace LaravelHashids\Providers;

use Hashids\Hashids;
use Illuminate\Support\ServiceProvider;

/**
 * LaravelHashidsServiceProvider.
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
        // Set the config path.
        $configuration = realpath(__DIR__.'/../../config/hashids.php');

        // Check the config path was resolved.
        if (function_exists('config_path')) {
            $this->publishes([
                $configuration => config_path('hashids.php'),
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
        // Bind to the IoC container.
        $this->app->singleton('hashids', function()
        {
            $salt = config('hashids.salt') ?: env('HASHIDS_SALT');
            $length = config('hashids.length') ?: env('HASHIDS_LENGTH');
            $alphabet = config('hashids.alphabet') ?: env('HASHIDS_ALPHABET');

            return new Hashids($salt, $length, $alphabet);
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
