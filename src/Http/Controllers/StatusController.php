<?php

/*
 * This file is part of Laravel TurnKey.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\TurnKey\Http\Controllers;

class StatusController extends BaseController
{
    public function goodbye()
    {
        $this->validateSession();

        return view('turnkey::goodbye');
    }

    public function staying()
    {
        return view('turnkey::staying');
    }
}
