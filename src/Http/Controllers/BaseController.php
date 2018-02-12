<?php

declare(strict_types=1);

/*
 * This file is part of Laravel TurnKey.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\TurnKey\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Session\SessionManager;

class BaseController extends Controller
{
    protected $session;

    public function __construct(SessionManager $session)
    {
        $this->session = $session;
    }

    protected function validateSession()
    {
        if (!$this->session->has('turnkey')) {
            return abort(403);
        }
    }

    protected function flashSessionKey()
    {
        $this->session->flash('turnkey', true);
    }
}
