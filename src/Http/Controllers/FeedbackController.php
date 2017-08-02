<?php

/*
 * This file is part of Laravel TurnKey.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\TurnKey\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
use BrianFaust\TurnKey\Contracts\FeedbackMailer;

class FeedbackController extends BaseController
{
    protected $turnkey;

    public function __construct(FeedbackMailer $mailer, SessionManager $session)
    {
        parent::__construct($session);

        $this->mailer = $mailer;
    }

    public function index()
    {
        $this->validateSession();

        return view('turnkey::feedback');
    }

    public function handle(Request $request)
    {
        if ($request->has('body')) {
            $this->mailer->send($request->get('body'));
        }

        $this->flashSessionKey();

        return redirect()->route('turnkey.goodbye');
    }
}
