<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use App\Utilities\ImageUploader;
use App\Utilities\Validator;

class Posts extends Controller
{

    protected $postModel;

    public function __construct()
    {
        $this->postModel = $this->model('post');
    }

    public function all()
    {
        if(!isLoggedIn()){
            redirect('/');
        }

        $this->view('dashboard.posts.all');
    }

    public function add()
    {
        if(!isLoggedIn()){
            redirect('/');
        }

        $this->view('dashboard.posts.add');
    }

    public function store()
    {
        if(!isLoggedIn()){
            redirect('/');
        }

        if(!isValidRequestMethod('post')){
            redirect('/');
        }

        $data = $_POST;

        $status = Validator::validate($data + $_FILES, [
            'title' => 'required|min:3',
            'body' => 'required|min:10',
            'image' => 'required|uploaded_file:0,10240k,jpeg,jpg,png'
        ]);

        if($status !== true){
            $this->view('dashboard.posts.add', ['errors' => $status]);
        }

        $inserted_id = $this->postModel->insert([
            'title' => $data['title'],
            'body' => $data['body'],
            'user_id' => getLoggedInUserId()
        ]);

        if(!$inserted_id){
            $this->view('dashboard.posts.add', ['errors' => 'The submitted post did not create!']);
        }

        $result = ImageUploader::upload($_FILES['image'], 'posts/post_' . $inserted_id, $_FILES['image']['name']);

        if(!is_string($result)){
            $this->view('dashboard.posts.add', ['errors' => $result]);
        }

        $this->postModel->update($inserted_id, [
            'image' => $result
        ]);

        redirect('posts/all');
    }
}
