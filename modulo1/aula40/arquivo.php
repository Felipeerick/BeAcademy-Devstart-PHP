<?php
/* Parametros do fopen();
a+ = leitura e escrita, r = leitura, w = escrita
 */ 

$arquivo = fopen("produtos.csv", "a+");

fwrite($arquivo, "Alessandro".PHP_EOL);

fclose($arquivo);
?>