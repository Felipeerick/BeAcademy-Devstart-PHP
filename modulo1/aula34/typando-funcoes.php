<?php

declare(strict_types=1);
/*Trata melhor os erros*/ 


function soma(int $n1, int $n2): int
{
   return $n1 + $n2;
};

/*Na função soma esse :int é pra typar o retorno da função*/



function Welcome(string $nome): string 
{
   return "Bem vindo: {$nome}";
};



/*Esse void é pra typar dizendo que essa função não tem retorno*/
function mostrarNomes(array $nomes): void
{
    foreach($nomes as $cadaNome){
        echo "Nome: ".$cadaNome.PHP_EOL; 
    }
}

mostrarNomes([
   "Olá", "Felipe"
]);
/*Usa typagem nos parametros melhora a assertividade e trata melhor os erros do código*/ 
?>