<?php

/*Quando quiser acessar a classe com nome repetido crie um alias para o caminho e use o nome como se fosse o nome da classe */


ini_set("display_errors", 1);

/*Sempre que inicia um novo arquivo com composer, lembre de carregar com composer dump-autoload
*/ 

include "vendor/autoload.php";

echo "Olá";

use Classes\Usuario as UsuarioPadrao;
use Classes\config\Usuario as UsuarioConfig;
use Dompdf\Dompdf;

$us1 = new UsuarioConfig();
$us2 = new UsuarioPadrao(); 

/* Var_dump($us1);
Var_dump($us2); */



// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();