<?php

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
    $dados->mensagemPrivada();
}

if($hoje == $diasSemana['Segunda']){
    $dados->segunda();
}elseif($hoje == $diasSemana['Terca']){
    $dados->terca();
}elseif($hoje == $diasSemana['Quarta']){
    $dados->quarta();
}elseif($hoje == $diasSemana['Quinta']){
    $dados->quinta();
}elseif($hoje == $diasSemana['Sexta']){
    $dados->sexta();
}elseif($hoje == $diasSemana['Sabado']){
    $dados->sabado();
}elseif($hoje == $diasSemana['Domingo']){
    $dados->domingo();
}

#Valores referente a Mês
$diaDoMes = date('j');
$numeroMes = date('n');

$nomeMes=[
    'janeiro'=>1,
    'fevereiro'=>2,
    'marco'=>3,
    'abril'=>4,
    'maio'=>5,
    'junho'=>6,
    'julho'=>7,
    'agosto'=>8,
    'setembro'=>9,
    'outubro'=>10,
    'novembro'=>11,
    'dezembro'=>12
];

if($diaDoMes == 1 && $numeroMes == $nomeMes['janeiro']){
    $dados->janeiro();
}elseif($diaDoMes ==  2 && $numeroMes == $nomeMes['fevereiro']){
    $dados->fevereiro();
}elseif($diaDoMes ==  3 && $numeroMes == $nomeMes['marco']){
    $dados->marco();
}elseif($diaDoMes ==  4 && $numeroMes == $nomeMes['abril']){
    $dados->abril();
}elseif($diaDoMes ==  5 && $numeroMes == $nomeMes['maio']){
    $dados->maio();
}elseif($diaDoMes ==  6 && $numeroMes == $nomeMes['junho']){
    $dados->junho();
}elseif($diaDoMes ==  7 && $numeroMes == $nomeMes['julho']){
    $dados->julho();
}elseif($diaDoMes ==  8 && $numeroMes == $nomeMes['agosto']){
    $dados->agosto();
}elseif($diaDoMes ==  9 && $numeroMes == $nomeMes['setembro']){
    $dados->setembro();
}elseif($diaDoMes ==  10 && $numeroMes == $nomeMes['outubro']){
    $dados->outubro();
}elseif($diaDoMes ==  11 && $numeroMes == $nomeMes['novembro']){
    $dados->novembro();
}elseif($diaDoMes ==  12 && $numeroMes == $nomeMes['dezembro']){
    $dados->dezembro();
}

