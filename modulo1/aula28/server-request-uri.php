<?php

$url = $_SERVER["REQUEST_URI"];

echo match($url){
  '/' =>  "<h1>Página inicial</h1>",
   '/login' =>  "<h1>você está na tela de login!</h1>",

   '/cadastro' => "<h1>Você está na tela de cadastro</h1>",

   default => "<h1> página não encontrada </h1>"

};


?>