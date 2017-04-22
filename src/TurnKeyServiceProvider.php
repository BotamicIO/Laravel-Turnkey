<?php


declare(strict_types=1);

/*
 * This file is part of Laravel TurnKey.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
