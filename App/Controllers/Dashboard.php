<?php

namespace App\Controllers;

use App\Core\Controller;

class Dashboard extends Controller
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('user');
    }

    public function index()
    {
        if(! isLoggedIn()){
            redirect('login/show');
        }

        $user = $this->userModel->select('id', $_SESSION['user_id']);

        echo 'Welcome ' . $user->name;
    }
}