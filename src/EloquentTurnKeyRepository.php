<?php

/*
 * This file is part of Laravel Turnkey.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\TurnKey;

use DraperStudio\TurnKey\Contracts\TurnKeyRepository;

/**
 * Class EloquentTurnKeyRepository.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class EloquentTurnKeyRepository implements TurnKeyRepository
{
    /**
     * @param $userId
     *
     * @return mixed
     */
    public function erase($userId)
    {
        $model = app()->make(config('turnkey.model'));

        return $model->find($userId)->delete();
    }
}
