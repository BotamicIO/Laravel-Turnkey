<?php

namespace DraperStudio\TurnKey;

use DraperStudio\TurnKey\Contracts\FeedbackMailer as MailerContract;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Mail\Message;

class FeedbackMailer implements MailerContract
{
    protected $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function send($body)
    {
        $view = config('turnkey.feedback.view');
        $subject = config('turnkey.feedback.subject');
        $email = config('turnkey.feedback.email');

        $this->mailer->send(
            $view, ['body' => $body],
            function (Message $message) use ($subject, $email) {
                $message->to($email)->subject($subject);
            }
        );
    }
}
