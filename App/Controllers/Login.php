<?php

namespace App\Controllers;

use App\Core\Controller;

class Login extends Controller
{
    public function show()
    {
        $this->view('auth.login');
    }

    public function login()
    {
        
    }
}