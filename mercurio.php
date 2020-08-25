<?php

// use PHPMailer\PHPMailer\PHPMailer;

// use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\PHPMailer;

require 'libr/src/PHPMailer.php';
require ('libr/src/Exception.php');
require ('libr/src/SMTP.php');


$correio = new PHPMailer();
$correio->isSMTP();
$correio->SMTPDebug = 2;
$correio->Host = 'smtp.comunhaoespirita.com';
$correio->SMTPAuth = true;
$correio->SMTPSecure = 'tls';
$correio->Username = 'ati@comunhaoespirita.com';
$correio->Password = ' ';
$correio->Port = 587;

$correio->setFrom('ati@comunhaoespirita.com');
//$correio->addReplyTo('no-reply@email.com.br');
// $correio->addAddress('email@email.com.br', ‘Nome’);
$correio->addAddress('ati.comunhao@gmail.com', 'Mercurio');
// $correio->addCC('email@email.com.br', 'Cópia');
// $correio->addBCC('email@email.com.br', 'Cópia Oculta')

$correio->isHTML(true);
$correio->Subject = 'Teste Mercurio Assunto';
$correio->Body    = 'Este é o conteúdo da mensagem em <b>HTML!</b>';
$correio->AltBody = 'Teste altBody';
// $correio->addAttachment('/tmp/image.jpg', 'nome.jpg');

if(!$correio->send()) {
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $correio->ErrorInfo;
} else {
    echo 'Mensagem enviada.';
}