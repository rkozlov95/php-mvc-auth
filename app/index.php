<?php

use core\Router;
use core\Request;

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path)) {
        require $path;
    }
});

session_start();

Router::load('config/routes.php')
    ->direct(Request::uri(), Request::method());
