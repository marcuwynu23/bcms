<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Account extends BaseController
{
    public function index()
    {
        return view('account/index');
    }
}
