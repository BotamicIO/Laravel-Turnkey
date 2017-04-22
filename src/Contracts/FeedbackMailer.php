<?php



declare(strict_types=1);

namespace BrianFaust\TurnKey\Contracts;

interface FeedbackMailer
{
    public function send($body);
}
