<?php


require 'functions.php';
require 'App.php';
require 'Controller.php';
require 'Model.php';
require 'Database.php';

spl_autoload_register(functiom ($class_name)) {

    require '../app/models/' . $class_name . '.php';

};


