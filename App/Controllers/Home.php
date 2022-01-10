<?php

namespace App\Controllers;

use App\Core\Controller;

class Home extends Controller
{

    protected $postModel;

    public function __construct()
    {
        $this->postModel = $this->model('post');
    }

    public function index()
    {
        $posts = $this->postModel->selectAll();

        $this->view('index', ['title' => config('app.title'), 'posts' => $posts]);
    }
}