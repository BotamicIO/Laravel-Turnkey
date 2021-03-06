<?php

declare(strict_types=1);

/*
 * This file is part of Laravel TurnKey.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\TurnKey;

use Illuminate\Support\ServiceProvider;

class TurnKeyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
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

    /**
     * Register any application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-turnkey.php', 'laravel-turnkey');
    }
}
