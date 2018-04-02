<?php

use PHPMailer\PHPMailer\PHPMailer;

function send(array $data){
    $email = new PHPMailer();
    $email->CharSet = "UTF-8";
    $email->SMTPSecure = 'plain';
    $email->isSMTP();
    $email->Host = 'smtp.mailtrap.io';
    $email->Port = 465;
    $email->SMTPAuth = true;
    $email->Username = 'aa47c122a6a472';
    $email->Password = '39546a1d2c7903';
    $email->isHTML(true);
    $email->setFrom($data['email']);
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para ver esse email tenha certeza de estar vendo';
    $email->msgHTML($data['mensagem']);


    return $email->send();
}