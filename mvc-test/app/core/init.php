<?php

require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Controller.php';
require 'Model.php';
require 'models.php';
require 'App.php';
require 'Books_db.php';

spl_autoload_register(function ($class_name) {

  require '../app/models/' . $class_name . '.php';
});