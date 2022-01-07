<?php

if(!function_exists('config')){

    function config(string $config){
        $file_config = explode('.', $config);  
      
        $config = require __DIR__ . '/../Configs/' . $file_config[0] . '.php';
    
        return $config[$file_config[1]];
    }

}