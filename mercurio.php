<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'libr/src/PHPMailer.php';
require 'libr/src/Exception.php';
require 'libr/src/SMTP.php';
require 'dados.php';

$dados = new Dados();
$diasSemana=[
    'Segunda' => 1,
    'Terca' => 2,
    'Quarta' => 3,
    'Quinta' => 4,
    'Sexta' => 5,
    'Sabado' => 6,
    'Domingo' => 7,
];

$hoje = date('N');

if($hoje < $diasSemana['Sabado']){
    $dados->mensagemLucas();
    enviaMensagem($dados);
    $dados->mensagemBreno();
    enviaMensagem($dados);
}

if($hoje == $diasSemana['Segunda']){
    $dados->mensagemLucas();
    enviaMensagem($dados);
}elseif($hoje == $diasSemana['Terca']){
    $dados->mensagemLucas();
    enviaMensagem($dados);
}elseif($hoje == $diasSemana['Quarta']){
    $dados->coletaDoacaoAlmox();
    enviaMensagem($dados);
}elseif($hoje == $diasSemana['Quinta']){
    $dados->bancoDoBrasil();
    enviaMensagem($dados);
    $dados->arquivosAPD();
    enviaMensagem($dados);
    $dados->bancoShop9();
    enviaMensagem($dados);
    $dados->relogioDePonto();
    enviaMensagem($dados);
}elseif($hoje == $diasSemana['Sexta']){
    $dados->reuniaoATI();
    enviaMensagem($dados);
}elseif($hoje == $diasSemana['Sabado']){
    $dados->mensagemLucas();
    enviaMensagem($dados);
}elseif($hoje == $diasSemana['Domingo']){
    $dados->mensagemLucas();
    enviaMensagem($dados);
}

function enviaMensagem($dados){
    $correio = new PHPMailer();

    $correio->isSMTP();
    $correio->SMTPAuth = true;
    $correio->Host = $dados->getField('host');
    $correio->Username = $dados->getField('usuario');
    $correio->Password = $dados->getField('senha');
    $correio->Port = $dados->getField('porta');

    $correio->setFrom ($dados->getField('remetente'), $dados->getField('nomeRemetente'));
    // $correio->addReplyTo('no-reply@email.com.br');
    // $correio->addAddress('email@email.com.br', ‘Nome’);
    $correio->addAddress($dados->getField('destinatario'), $dados->getField('nomeDestinatario'));
    // $correio->addCC('email@email.com.br', 'Cópia');
    // $correio->addBCC('email@email.com.br', 'Cópia Oculta')

    $correio->isHTML(true);
    $correio->Subject = $dados->getField('assunto');
    $correio->Body    = $dados->getField('mensagem');
    $correio->AltBody = $dados->getField('mensagemAlt');
    // $correio->addAttachment('/tmp/image.jpg', 'nome.jpg');

    if(!$correio->send()) {
        echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $correio->ErrorInfo;
    } else {
        echo 'Mensagem enviada.';
    }
}
