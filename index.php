<?php

namespace Pierre\P4;
use Pierre\P4\Autoloader;
use Pierre\P4\Framework\Router;

require_once('Autoloader.php');
Autoloader::register();
$router = new Router;
$router->routeRequest();


