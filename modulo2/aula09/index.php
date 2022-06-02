<?php

include 'Produtos.php';
include "Categoria.php";


 $c1 = new Categoria("Roupas", "Roupas unissex");
$c2 = new Categoria("Roupas de banho", "toalhas pra rosto, etc"); 


var_dump($p1 = new Produto('camisa', 69.99, $c1 ));


/* $p1 -> setName('Camisa');
echo $p1 -> getName().PHP_EOL;
$p1 -> setValue(250);
echo $p1->getvalue(); */


//$p2 = new Produto();
/* $p2 -> nome = "calça jeans";
$p2 -> valor = 199; */

