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

if(!function_exists('url')){

    function url(string $path = ''){   
        if($path == '') 
            return BASE_URl;
              
        return BASE_URl . ltrim($path, '/');
    }
}

if(!function_exists('dump_die')){

    function dump_die(...$vars){ 
        echo '<pre>';  
        var_dump(...$vars);
        echo '</pre>';  
        die();
    }
    
}

if(!function_exists('load_view')){

    function load_view(string $path, array $data = []){
        $view_base_path = realpath(__DIR__ . '/../Views') . '/';

        extract($data);

        include $view_base_path . str_replace('.', '/', $path) . '.php';
    }

}

if(!function_exists('redirect')){

    function redirect(string $path){
        header('Location: '.url($path).'');
    }

}

if(!function_exists('isLoggedIn')){

    function isLoggedIn(){
        return isset($_SESSION['user_id']) ? true : false;
    }

}