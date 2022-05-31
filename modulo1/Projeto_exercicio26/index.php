
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/reset.css">
    <link rel="stylesheet" href="./assets/layout.css">
    <link rel="shortcut icon" href="./imagens/icon.svg" type="image/x-icon">
    
    <title>Loja POP</title>

</head>


<body>

<?php
 $calca = [
     "nome" => "Calça",
     "Foto" => "./imagens/calça.jpg",
     "marca" => "Levi´s",
     "tamanho" => "35 reais",
     "cor" => "azul",
      "valor" => "40 reais",
      
      
    
 ];


 $sapato = [
     "nome" => "Sapato",
     "Foto" => "./imagens/sapato_adidas_vermelho.jpg",
    "marca" => "Adidas",
    "tamanho" => "38",
     "cor" => "vermelho",
    "valor" => "40 reais",
    
 ];

 $fone =[
    "nome" => "Fone",
    "Foto" => "./imagens/fone_verde.jpg",
     "marca" => "Evolut",
     "tamanho" => "15",
      "cor" => "preto com verde",
      "valor" => "85 reais",
      
 ];

 
 $camisa = [
    "nome" => "Camisa",
    "Foto" => "./imagens/imagem_camisa_polo.jpg",
     "marca" => "Polo g",
     "tamanho" => "P",
     "cor" => "roxo",
     "valor" => "100 reais",
     
 ];


 $produtosDaLoja = [
    $calca,
    $sapato,
     $fone,
     $camisa,
 ]

?>

<header class="cabecalho">
       <h1 class="titulo">Loja de produtos XPTO</h1>

</header>
<main>

<table class="tabela">
       
    <thead class="cabecalho">

        <tr>
                     <th >Nome</th>
                     <th>Foto</th>
                     <th >Marca</th>
                     <th >Tamanho</th>
                     <th >Cor</th>
                     <th >Valor</th>
                     
                     

         </tr>

    </thead>

   <tbody class="produtos">

   <?php 
          foreach($produtosDaLoja as $produtosParaVender){
              echo "<tr>

              <td >{$produtosParaVender['nome']}</td>
              <td ><img src='{$produtosParaVender['Foto']}'></td>
              <td >{$produtosParaVender['marca']}</td>
              <td >{$produtosParaVender['tamanho']}</td>
              <td >{$produtosParaVender['cor']}</td>
              <td >{$produtosParaVender['valor']}</td>
             
              
              </tr>";
          };

         ?>


   </tbody>
   </main>
    


</table>
</body>
</html>

