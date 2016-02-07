<?php

namespace Vitalias\Socials;

use Illuminate\Support\ServiceProvider;
use Vitalias\Socials\SocialsManager;

class SocialsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Vitalias\Socials\Contracts\Factory', function ($app) {
            return new SocialsManager($app);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['Vitalias\Socials\Contracts\Factory'];
    }
}
