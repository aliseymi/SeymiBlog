<?php

class Core 
{
    protected $currentController;
    protected $currentMethod;
    protected $currentParams = [];
    protected $currentRoute = [];

    public function __construct()
    {
        $this->getUrl();
        
        $base_namespace = $this->getControllersBaseNameSpace();
        
        if(!isset($this->currentRoute[0])){
            $home_controller = new ($base_namespace . 'Home');

            $home_controller->index();

            die();
        }

        $controller_name = $base_namespace . ucfirst($this->currentRoute[0]);
        
        if(!class_exists($controller_name)){
            die("$controller_name does not exist!");
        }
        
        $this->currentController = $controller_name;
        unset($this->currentRoute[0]);

        if(!isset($this->currentRoute[1])){
            return;
        }

        $controller = new $this->currentController;

        if(!method_exists($controller, $this->currentRoute[1])){
            die("Method {$this->currentRoute[1]} does not exist!");
        }

        $this->currentMethod = $this->currentRoute[1];
        unset($this->currentRoute[1]);

        $this->currentParams = $this->currentRoute ? array_values($this->currentRoute) : [];

        call_user_func_array([$controller, $this->currentMethod], $this->currentParams);
    }

    public function getUrl()
    {
        if(isset($_GET['url'])){
            $url = filter_var(htmlspecialchars(rtrim($_GET['url'], '/')), FILTER_SANITIZE_STRING);

            $this->currentRoute = explode('/', $url);
        }
    }

    private function getControllersBaseNameSpace()
    {
        return 'App\Controllers\\';
    }
}