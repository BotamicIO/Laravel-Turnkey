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

use DraperStudio\TurnKey\Contracts\TurnKeyRepository;
use DraperStudio\TurnKey\Http\Requests\DeleteAccountRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Session\SessionManager;

/**
 * Class HomeController.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class HomeController extends BaseController
{
    /**
     * @var Guard
     */
    protected $auth;

    /**
     * @var TurnKeyRepository
     */
    protected $turnkey;

    /**
     * HomeController constructor.
     *
     * @param Guard             $auth
     * @param TurnKeyRepository $turnkey
     * @param SessionManager    $session
     */
    public function __construct(Guard $auth, TurnKeyRepository $turnkey, SessionManager $session)
    {
        parent::__construct($session);

        $this->middleware('auth');

        $this->auth = $auth;
        $this->turnkey = $turnkey;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('turnkey::form');
    }

    /**
     * @param DeleteAccountRequest $request
     *
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function handle(DeleteAccountRequest $request)
    {
        $identifier = config('turnkey.identifier');

        $credentials = [
            $identifier => $this->auth->user()->$identifier,
            'password' => $request->get('password'),
        ];

        if ($this->auth->validate($credentials)) {
            $this->turnkey->erase($this->auth->id());

            $this->auth->logout();

            $next = config('turnkey.feedback.active') ? 'turnkey.feedback'
                                                      : 'turnkey.goodbye';

            $this->flashSessionKey();

            return redirect()->route($next);
        }

        return redirect(config('turnkey.urls.index'))
                    ->withErrors([
                        'invalid' => 'These credentials do not match our records.',
                    ]);
    }
}
