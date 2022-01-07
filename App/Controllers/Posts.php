<?php

namespace App\Controllers;

use App\Core\Controller;

class Posts extends Controller
{
    public function all()
    {
        echo 'hi from all';
    }

    public function show()
    {
        $this->view('index', ['title' => config('app.title')]);
    }
}