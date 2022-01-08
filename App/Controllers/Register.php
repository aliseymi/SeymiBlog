<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Utilities\Validator;

class Register extends Controller
{

    protected $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('user');
    }

    public function show()
    {
        if (isLoggedIn()) {
            redirect('/');
        }

        $this->view('auth.register');
    }

    public function register()
    {
        if (isLoggedIn()) {
            redirect('/');
        }

        if (!strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            redirect('register/show');
        }

        $data = $_POST;
        $status = Validator::validate($data, [
            'name'                  => 'required|min:3|max:64',
            'email'                 => 'required|email',
            'password'              => 'required|min:6',
            'password_confirmation'      => 'required|same:password',
        ]);

        if ($status !== true) {

            $this->view('auth.register', ['errors' => $status]);
        }

        $user = $this->userModel->select('email', $data['email']);

        if (!is_null($user)) {
            $this->view('auth.register', ['errors' => 'The entered email already exists!']);
        }

        $inserted_id = $this->userModel->insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_BCRYPT)
        ]);

        $_SESSION['user_id'] = $inserted_id;

        redirect('dashboard/index');
    }
}
