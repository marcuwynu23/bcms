<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        sss
        log_message('info', 'Home page visited');
        return view('home/index');
    }
}
