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
 * Interface FeedbackMailer.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
interface FeedbackMailer
{
    /**
     * @param $body
     *
     * @return mixed
     */
    public function send($body);
}
