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

use BrianFaust\TurnKey\Contracts\TurnKeyRepository;
use BrianFaust\TurnKey\Http\Requests\DeleteAccountRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Session\SessionManager;

class HomeController extends BaseController
{
    protected $auth;

    protected $turnkey;

    public function __construct(Guard $auth, TurnKeyRepository $turnkey, SessionManager $session)
    {
        parent::__construct($session);

        $this->middleware('auth');

        $this->auth = $auth;
        $this->turnkey = $turnkey;
    }

    public function index()
    {
        return view('turnkey::form');
    }

    public function handle(DeleteAccountRequest $request)
    {
        $identifier = config('laravel-turnkey.identifier');

        $credentials = [
            $identifier => $this->auth->user()->$identifier,
            'password'  => $request->get('password'),
        ];

        if ($this->auth->validate($credentials)) {
            $this->turnkey->erase($this->auth->id());

            $this->auth->logout();

            $next = config('laravel-turnkey.feedback.active') ? 'turnkey.feedback'
                                                      : 'turnkey.goodbye';

            $this->flashSessionKey();

            return redirect()->route($next);
        }

        return redirect(config('laravel-turnkey.urls.index'))
                    ->withErrors([
                        'invalid' => 'These credentials do not match our records.',
                    ]);
    }
}
