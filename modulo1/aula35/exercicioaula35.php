<?php

/*Crie funções que transforme o primeiro nome em maiusculo, o segundo em minusculo e o terceiro em as 3 primeiras letras em maiusculo*/ 

$nome = "felipe";

$sobrenome='ERICK';

$nome2 = "alessandro feitosa da silva";

$data = date("dd/mm/yy");
echo $data;

$data = date("H:i:s");
echo $data;

 
function primeiraletraMaiuscula(string $nome): string
{
    return ucfirst($nome);
};

primeiraletraMaiuscula('felipe');


function tudoMinusculo(string $nome): string
{
   return strtolowercase($nome);
};

tudoMinusculo($sobrenome);

function tudoMaiusculo(string $nome): string
{
 return strtoupper($nome);
}

tudoMaiusculo($nome);

function primeiraLetradeCadaPalavra(string $nome):string 
{
  return ucwords($nome);
};

primeiraLetradeCadaPalavra($nome2)
?>

