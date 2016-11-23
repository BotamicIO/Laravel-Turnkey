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

use BrianFaust\TurnKey\Contracts\TurnKeyRepository;

class EloquentTurnKeyRepository implements TurnKeyRepository
{
    public function erase($userId)
    {
        $model = app()->make(config('turnkey.model'));

        return $model->find($userId)->delete();
    }
}
