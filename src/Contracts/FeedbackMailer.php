<?php

namespace BrianFaust\TurnKey\Contracts;

interface FeedbackMailer
{
    public function send($body);
}
