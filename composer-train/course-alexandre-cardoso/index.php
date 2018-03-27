<?php 

require "vendor/autoload.php";




// $email = new app\classes\Email;
// $produto = new app\models\Produto;
$search = new asw\services\Search;
$register = new asw\jobs\Register;


// echo $email->send();
// echo $produto->create();
echo $search->search();
echo $register->register();