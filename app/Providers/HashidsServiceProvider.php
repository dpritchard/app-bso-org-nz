<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Arr;

use Hashids\Hashids;

class HashidsServiceProvider extends ServiceProvider
{
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
                Arr::get($config, 'salt'),
                Arr::get($config, 'length', 0),
                Arr::get($config, 'alphabet')
            );
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
