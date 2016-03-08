<?php

/*
 * This file is part of Laravel Turnkey.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\TurnKey;

use DraperStudio\TurnKey\Contracts\FeedbackMailer as MailerContract;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Mail\Message;

/**
 * Class FeedbackMailer.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class FeedbackMailer implements MailerContract
{
    /**
     * @var Mailer
     */
    protected $mailer;

    /**
     * FeedbackMailer constructor.
     *
     * @param Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param $body
     */
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
