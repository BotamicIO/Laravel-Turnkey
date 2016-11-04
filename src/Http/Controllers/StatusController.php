<?php

namespace BrianFaust\TurnKey\Http\Controllers;

class StatusController extends BaseController
{
    public function goodbye()
    {
        $this->validateSession();

        return view('turnkey::goodbye');
    }

    public function staying()
    {
        return view('turnkey::staying');
    }
}
