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

namespace Artisanry\TurnKey\Http\Controllers;

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
