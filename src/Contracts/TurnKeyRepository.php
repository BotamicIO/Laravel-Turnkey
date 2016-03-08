<?php

/*
 * This file is part of Laravel Turnkey.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\TurnKey\Contracts;

/**
 * Interface TurnKeyRepository.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
interface TurnKeyRepository
{
    /**
     * @param $user
     *
     * @return mixed
     */
    public function erase($user);
}
