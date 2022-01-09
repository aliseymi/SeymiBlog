<?php

namespace App\Controllers;

use App\Core\Controller;

class Logout extends Controller
{
    public function logout()
    {
        unset($_SESSION['user_id']);

        redirect('/');
    }
}