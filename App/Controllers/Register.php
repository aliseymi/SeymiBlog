<?php

namespace App\Controllers;

use App\Core\Controller;

class Register extends Controller
{
    public function show()
    {
        $this->view('auth.register');
    }

    public function register()
    {
        
    }
}