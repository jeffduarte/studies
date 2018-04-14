<?php

use app\classes\Uri;
use app\classes\Routes;

require "../bootstrap.php";

$routes = [
    '/' => 'controllers/index.php'
];


$uri = Uri::load();

$uri = getRoute($uri, 45);

require Routes::load($routes, $uri);