<?php

namespace DraperStudio\TurnKey\Contracts;

interface FeedbackMailer
{
    public function send($body);
}
