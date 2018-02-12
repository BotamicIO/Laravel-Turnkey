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

namespace BrianFaust\TurnKey;

use BrianFaust\TurnKey\Contracts\FeedbackMailer as MailerContract;
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
        $view = config('laravel-turnkey.feedback.view');
        $subject = config('laravel-turnkey.feedback.subject');
        $email = config('laravel-turnkey.feedback.email');

        $this->mailer->send(
            $view, ['body' => $body],
            function (Message $message) use ($subject, $email) {
                $message->to($email)->subject($subject);
            }
        );
    }
}
