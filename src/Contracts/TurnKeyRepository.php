<?php

/*
 * This file is part of Laravel TurnKey.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\TurnKey\Contracts;

interface TurnKeyRepository
{
    public function erase($user);
}
