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

namespace Artisanry\TurnKey\Repositories;

use Artisanry\TurnKey\Contracts\TurnKeyRepository;

class EloquentTurnKeyRepository implements TurnKeyRepository
{
    public function erase($userId)
    {
        $model = app()->make(config('laravel-turnkey.model'));

        return $model->find($userId)->delete();
    }
}
