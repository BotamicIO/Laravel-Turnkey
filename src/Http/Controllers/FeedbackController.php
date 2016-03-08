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

use DraperStudio\TurnKey\Contracts\FeedbackMailer;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;

/**
 * Class FeedbackController.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class FeedbackController extends BaseController
{
    /**
     * @var
     */
    protected $turnkey;

    /**
     * FeedbackController constructor.
     *
     * @param FeedbackMailer $mailer
     * @param SessionManager $session
     */
    public function __construct(FeedbackMailer $mailer, SessionManager $session)
    {
        parent::__construct($session);

        $this->mailer = $mailer;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->validateSession();

        return view('turnkey::feedback');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request)
    {
        if ($request->has('body')) {
            $this->mailer->send($request->get('body'));
        }

        $this->flashSessionKey();

        return redirect()->route('turnkey.goodbye');
    }
}
