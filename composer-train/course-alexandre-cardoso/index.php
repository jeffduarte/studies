<?php

require 'vendor/autoload.php';
require 'app/classes/Email.php';
// require 'vendor\phpmailer\phpmailer\src\PHPMailer.php';

use \PHPMailer\PHPMailer\PHPMailer;





$email = new Email;

echo $email->send();