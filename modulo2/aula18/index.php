<?php

declare(strict_types=1);
include "Usuario.php";
include "Cliente.php";
include "Gestor.php";
include "GestorGeral.php";
include "Validar.php";

//var_dump($c1);
/*$u3 = new Usuario("email",'senha',"elipe");
$u3 -> setName("Felipe");
$u3 -> getName();
//var_dump($u3);*/


//$c3 = new Cliente("email", "senha", "lepe");
//var_dump($c3);

//$gg3 = new GestorGeral(3200.00, 100);
//var_dump($gg3);

$cpf="234545";
Validar::validarCPF($cpf);