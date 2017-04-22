<?php



declare(strict_types=1);

namespace BrianFaust\TurnKey\Http\Controllers;

use BrianFaust\TurnKey\Contracts\FeedbackMailer;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;

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
