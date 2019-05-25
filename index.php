<?php

use src\H1\Request;
use src\H1\Response;
use src\H2\Router;

// include_once 'src/H1/Request.php';
// include_once 'src/H1/Response.php';
// include_once 'src/H2/Router.php';

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});

$router = new Router(new Request);

$router->get('/new', 'main');
