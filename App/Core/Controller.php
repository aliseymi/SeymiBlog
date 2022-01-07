<?php

namespace App\Core;

use App\Core\BaseModel;

class Controller 
{
    protected function model(string $modelName)
    {
        $model_full_name = 'App\Models\\' . ucfirst(strtolower($modelName));

        if(!class_exists($model_full_name)){
            die("Class $model_full_name does not exist!");
        }

        if(!is_subclass_of($model_full_name, BaseModel::class)){
            die("Class $model_full_name should extend App\Core\BaseModel");
        }

        return new $model_full_name;
    }

    protected function view(string $view_path, array $data = [])
    {
        $base_view_path = realpath(__DIR__ . '/../Views');
        
        $file_path = $base_view_path . '/' . str_replace('.', '/', $view_path) . '.php';
    
        extract($data);

        require_once $file_path;
    }
}