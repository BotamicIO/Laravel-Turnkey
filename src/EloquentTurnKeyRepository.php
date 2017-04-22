<?php



declare(strict_types=1);

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
