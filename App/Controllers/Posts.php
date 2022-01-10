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

        $posts = $this->postModel->selectAll('user_id', getLoggedInUserId());

        $this->view('dashboard.posts.all', compact('posts'));
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

    public function edit($post_id)
    {
        if(!isLoggedIn()){
            redirect('/');
        }

        $post = $this->postModel->select('id', $post_id);

        if(is_null($post)){
            redirect('posts/all');
        }

        $this->view('dashboard.posts.edit', compact('post'));
    }

    public function update($post_id)
    {
        if(!isLoggedIn()){
            redirect('/');
        }

        if(!isValidRequestMethod('post')){
            redirect('posts/all');
        }

        $data = $_POST;

        $post = $this->postModel->select('id', $post_id);

        if(is_null($post)){
            $this->view('dashboard.posts.edit', ['errors' => 'The post you want to edit does not exist!']);
        }

        $status = Validator::validate($data + $_FILES, [
            'title' => 'required|min:3',
            'body' => 'required|min:10',
            'image' => 'nullable|uploaded_file:0,10240K,jpg,jpeg,png'
        ]);

        if($status !== true){
            $this->view('dashboard.posts.edit', ['errors' => $status]);
        }

        if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){
            $uploaded_image = ImageUploader::upload($_FILES['image'], 'posts/post_' . $post->id, $_FILES['image']['name']);

            if(is_string($uploaded_image)){
                $data['image'] = $uploaded_image;
            }
        }

        $this->postModel->update($post->id, $data);

        redirect('posts/all');

    }

    public function delete()
    {
        if(!isLoggedIn()){
            redirect('/');
        }

        if(!isValidRequestMethod('post')){
            redirect('posts/all');
        }

        $status = Validator::validate($_POST, [
            'post_id' => 'required|numeric'
        ]);

        if($status !== true){
            redirect('posts/all');
        }

        $post = $this->postModel->select('id', $_POST['post_id']);

        if(is_null($post)){
            redirect('posts/all');
        }
        
        $this->postModel->delete($_POST['post_id']);

        redirect('posts/all');
    }

    public function show($post_id)
    {
        if(!isLoggedIn()){
            redirect('/');
        }

        $post = $this->postModel->select('id', $post_id);

        if(is_null($post)){
            redirect('/');
        }

        $this->view('posts.show', ['post' => $post]);
    }
}
