<?php

namespace App\Core;

class Controller 
{
    protected function model()
    {
        
    }

    protected function view(string $view_path, array $data = [])
    {
        $base_view_path = realpath(__DIR__ . '/../Views');
        
        $file_path = $base_view_path . '/' . str_replace('.', '/', $view_path) . '.php';
    
        extract($data);

        require_once $file_path;
    }
}