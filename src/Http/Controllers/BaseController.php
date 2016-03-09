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

use Illuminate\Routing\Controller;
use Illuminate\Session\SessionManager;

/**
 * Class BaseController.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class BaseController extends Controller
{
    /**
     * @var SessionManager
     */
    protected $session;

    /**
     * BaseController constructor.
     *
     * @param SessionManager $session
     */
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
