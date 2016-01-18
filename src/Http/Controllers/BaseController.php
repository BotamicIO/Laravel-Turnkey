<?php

namespace DraperStudio\TurnKey\Http\Controllers;

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
