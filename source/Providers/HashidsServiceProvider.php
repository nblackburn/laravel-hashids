<?php namespace Nblackburn\Hashids\Providers;

use Hashids\Hashids;
use Illuminate\Support\ServiceProvider;

class HashidsServiceProvider extends ServiceProvider
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
        $configuration = realpath(__DIR__ . '/../../config/hashids.php');

        // Check the config path was resolved.
        if(function_exists('config_path'))
        {
            // Publish the config.
            $this->publishes([
                $path => config_path('hashids.php'),
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
        // Get the salt.
        $salt = config('hashids.salt') ?: env('HASHIDS_SALT');

        // Get the length.
        $length = config('hashids.length') ?: env('HASHIDS_LENGTH');

        // Get the alphabet.
        $alphabet = config('hashids.alphabet') ?: env('HASHIDS_ALPHABET');

        // Bind to the IoC container.
        $this->app->singleton('hashids', function($app) use($salt, $length, $alphabet) {
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
