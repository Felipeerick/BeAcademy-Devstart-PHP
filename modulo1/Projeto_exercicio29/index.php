<?php

/*Ele tratar melhor os erros do código*/
declare(strict_types=1);
/*Serve para melhorar a assertividade do código*/


$url = explode("?", $_SERVER["REQUEST_URI"]);

include 'telas/head.php';
include 'telas/menu.php';
include 'telas/acoes.php';

echo match($url[0]){
  '/' =>  home(),
   '/login' =>  login(),

   '/cadastro' =>cadastro(),

   '/listar' => listar(),
   
   '/relatorio' => relatorio(),

   '/excluir' => excluir(),

   '/editar' => editar(),

   default => admin()

};

include 'telas/footer.php';
?>