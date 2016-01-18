<?php

namespace DraperStudio\TurnKey;

use DraperStudio\TurnKey\Contracts\TurnKeyRepository;

class EloquentTurnKeyRepository implements TurnKeyRepository
{
    public function erase($userId)
    {
        $model = app()->make(config('turnkey.model'));

        return $model->find($userId)->delete();
    }
}
