<?php

namespace LaravelHashids\Providers;

use Hashids\Hashids;
use Illuminate\Support\ServiceProvider;

/**
 * LumenHashidsServiceProvider
 *
 * @package LaravelHashids\Providers
 * @author Nathaniel Blackburn <support@nblackburn.uk> (http://nblackburn.uk)
 */
class LumenHashidsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Bind to the IoC container.
        $this->app->singleton('hashids', function () {
            // Get the salt.
            $salt = env('HASHIDS_SALT');

            // Get the length.
            $length = env('HASHIDS_LENGTH');

            // Get the alphabet.
            $alphabet = env('HASHIDS_ALPHABET');

            // Return a new Hashids instance.
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
            'hashids'
        ];
    }
}
