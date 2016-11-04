<?php

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
