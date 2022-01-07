<?php

namespace App\Controllers;

class Posts 
{
    public function all()
    {
        echo 'hi from all';
    }

    public function show()
    {
        echo config('app.title');
    }
}