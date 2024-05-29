<?php
<<<<<<< HEAD

require 'functions.php';
require 'App.php';
require 'Controller.php';
require 'Model.php';
require 'App.php';

spl_autoload_register(function ($class_name){

    require '../app/models/' . $class_name . '.php';
});
=======
    require 'config.php';
    require 'functions.php';
    require 'App.php';
    require 'Controller.php';
    require 'Database.php';
    require 'Model.php';

    spl_autoload_register(function ($class_name){
        require '../app/models/' . $class_name . '.php';
    });
    
>>>>>>> ca369a8da67c616c8d3d900ff4130dc2888d8714
