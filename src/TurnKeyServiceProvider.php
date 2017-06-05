<?php

/*
 * This file is part of Laravel TurnKey.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\TurnKey;

use Illuminate\Support\ServiceProvider;

class TurnKeyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-turnkey.php' => config_path('laravel-turnkey.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/laravel-turnkey'),
        ], 'views');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-turnkey');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-turnkey.php', 'laravel-turnkey');
    }
}
