<?php

namespace App\Controllers;

class Survey extends BaseController
{
    public function index(): string
    {
        return view('content/vsurvey');
    }
}
