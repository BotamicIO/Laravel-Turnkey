<?php



declare(strict_types=1);

namespace BrianFaust\TurnKey\Contracts;

interface TurnKeyRepository
{
    public function erase($user);
}
