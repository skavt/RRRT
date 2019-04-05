<?php

include_once 'src/H1/Request.php';
include_once 'src/H1/Response.php';
include_once 'src/H2/Router.php';

$router = new Router(new Request);

$router->get('/hey', 'main');

?>
