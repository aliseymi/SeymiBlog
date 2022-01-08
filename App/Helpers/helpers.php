<?php

if(!function_exists('config')){

    function config(string $config){
        $file_config = explode('.', $config);  
      
        $config = require __DIR__ . '/../Configs/' . $file_config[0] . '.php';

        if(count($file_config) <= 1){
            return $config;
        }
    
        return $config[$file_config[1]];
    }

}

if(!function_exists('asset')){

    function asset(string $path){      
        return BASE_URl . ltrim($path, '/');
    }

}

if(!function_exists('load_view')){

    function load_view(string $path){
        $view_base_path = realpath(__DIR__ . '/../Views') . '/';

        include $view_base_path . str_replace('.', '/', $path) . '.php';
    }

}