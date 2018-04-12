<?php

require "../bootstrap.php";

$rontes = [
    '/studies/PDO-train/asolucoes-PDO/public/' => 'controllers/index.php'
];

$uri = $_SERVER['REQUEST_URI'];
// $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

dd($uri);