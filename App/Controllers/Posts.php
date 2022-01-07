<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;

class Posts extends Controller
{

    protected $postModel;

    public function __construct()
    {
        $this->postModel = $this->model('post');    
    }

    public function all()
    {
        echo 'hi from all';
    }

    public function add()
    {
        $post = $this->postModel->insert([
            'title' => 'test',
            'body' => 'this is a test',
            'user_id' => 1,
        ]);

        var_dump($post);
    }

    public function show()
    {
        $this->view('index', ['title' => config('app.title')]);
    }
}