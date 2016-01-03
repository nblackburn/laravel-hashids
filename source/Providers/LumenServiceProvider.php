<?php

namespace LaravelHashids\Providers;

use Hashids\Hashids;
use Illuminate\Support\ServiceProvider;

/**
 * LumenHashidsServiceProvider.
 *
 * @author Nathaniel Blackburn <support@nblackburn.uk> (http://nblackburn.uk)
 */
class LumenServiceProvider extends ServiceProvider
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
        $this->app->singleton('hashids', function()
        {
            $salt = env('HASHIDS_SALT');
            $length = env('HASHIDS_LENGTH');
            $alphabet = env('HASHIDS_ALPHABET');

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
