<?php

/*
 * This file is part of Laravel Turnkey.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\TurnKey\Http\Controllers;

/**
 * Class StatusController.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class StatusController extends BaseController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function goodbye()
    {
        $this->validateSession();

        return view('turnkey::goodbye');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function staying()
    {
        return view('turnkey::staying');
    }
}
