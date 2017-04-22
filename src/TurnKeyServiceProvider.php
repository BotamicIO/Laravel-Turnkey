<?php



declare(strict_types=1);

namespace BrianFaust\TurnKey;

use BrianFaust\ServiceProvider\AbstractServiceProvider;

class TurnKeyServiceProvider extends AbstractServiceProvider
{
    public function boot(): void
    {
        $this->publishConfig();

        $this->publishViews();

        $this->loadViews();
    }

    public function register(): void
    {
        parent::register();

        $this->mergeConfig();
    }

    public function provides(): array
    {
        return array_merge(parent::provides(), ['cookie-consent']);
    }

    public function getPackageName(): string
    {
        return 'turnkey';
    }
}
