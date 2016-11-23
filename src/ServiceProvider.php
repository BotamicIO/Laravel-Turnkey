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

class ServiceProvider extends \BrianFaust\ServiceProvider\ServiceProvider
{
    public function boot()
    {
        $this->publishConfig();

        $this->publishViews();

        $this->loadViews();
    }

    public function register()
    {
        parent::register();

        $this->mergeConfig();
    }

    public function provides()
    {
        return array_merge(parent::provides(), ['cookie-consent']);
    }

    public function getPackageName()
    {
        return 'turnkey';
    }
}
