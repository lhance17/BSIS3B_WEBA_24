<?php
<<<<<<< HEAD

class Controller{
    public function view($name)
    {
        if (file_exists('../app/views/' . $name . '.php')){

            require '../app/views/' . $name . '.php';
        } else{

            require '../app/views/404.php';
        }
    }
}
=======
    class Controller{
        public function view($name){
            if (file_exists('../app/views/' . $name . '.php')){
                require '../app/views/' . $name . '.php';
            }
            else{
                require '../app/views/404.php';
            }
        }
    }
>>>>>>> ca369a8da67c616c8d3d900ff4130dc2888d8714
