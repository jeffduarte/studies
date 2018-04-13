<?php

function dd($dump){
    var_dump($dump);
    
    die();
}

function getRoute ($uri, $uriLength) {
    return substr($uri, $uriLength);
}