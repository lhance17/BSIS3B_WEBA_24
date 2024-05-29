<?php

class Controller {
    public function view    ($name){
        if (file_exists('../app/view/'. $name . '.php')){
            
            require '../app/view/' .$name . '.php';
        
        }else{
            require '../app/view/__404.php';
        }
    }

}