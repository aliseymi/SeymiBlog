<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Utilities\Validator;

class Login extends Controller
{

    protected $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('user');
    }

    public function show()
    {
        if(isLoggedIn()){
            redirect('/');
        }

        $this->view('auth.login');
    }

    public function login()
    {

        if(isLoggedIn()){
            redirect('/');
        }

        if (!strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            redirect('login/show');
        }

        $data = $_POST;

        $status = Validator::validate($data, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if($status !== true){
            $this->view('auth.login', ['errors' => $status]);
        }

        $user = $this->userModel->select('email', $data['email']);

        if(is_null($user)){
            $this->view('auth.login', ['errors' => 'email or password is wrong!']);
        }

        if(! password_verify($data['password'], $user->password)){
            $this->view('auth.login', ['errors' => 'email or password is wrong!']);
        }

        $_SESSION['user_id'] = $user->id;

        redirect('dashboard/index');
    }
}
