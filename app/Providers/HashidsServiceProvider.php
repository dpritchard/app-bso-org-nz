<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Hashids\Hashids;

class HashidsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Hashids::class, function ($app) {
            $config = $app->config->get('hashids');
            return new Hashids(
                array_get($config, 'salt'),
                array_get($config, 'length', 0),
                array_get($config, 'alphabet')
            );
        });
    }
}
