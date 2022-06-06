<?php

/* A ideia do polimorfismo é crirar um modelo que todas as classes devem seguir*/
include 'Validar.php';
include 'ValidarBr.php';
include 'ValidarUsa.php';

$cpf = "12345678912345";

$Br= new ValidarBr();
//$Br-> ValidarDocumento($cpf);

$usa = new ValidarUsa();
$usa -> ValidarDocumento($cpf);