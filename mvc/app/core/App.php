<?php

class App 
{
   protected $controller = 'Home';
   protected $method = 'index';
   protected $params = [];

   public function __construct()
   {
    $url =$this ->splitUrl();

    if(file_exists('../app/controllers/'. ucfirst($url1[0]) . 'php')) {

        $this->controller = ucfirst($url1[0]);
        unset($url[0]);

    }else{
        $this->controller = '_404';

    }
   }
   require '../app/controllers/' . $this->controller . 'php';
   $this-> controller = new $this->controller;

   if (isset($url[1])){
    if (method_exists($this->controller, $url[1])){
        $this->$method =$url1[1];
        unset($url[1]);
    }
   }
   $this->$params =$url ? array_values($url) : [];
   call_user_func([$this->controller, $this->$metchod], $this->$params);

private function splitUrl1()
{
    if(isset($_GET['url'])){
        $url = explode("/", trim($_GET['url', "/"]));
        return $url;
    }
}   

}