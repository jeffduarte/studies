<?php

require "../../../bootstrap.php";

if (isEmpty()){
    flash('message','Preencha todos os campos');

    header("location:/studies/PHP-train/php-devclass/public/?page=contato");
}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's'

]);


dd($validate->name);