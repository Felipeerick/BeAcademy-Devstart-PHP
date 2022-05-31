       
              <h1 class="titulo">Loja de produtos XPTO</h1>

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


<main>

<table class="tabela">
       
    <thead>

        <tr>
                     <th class="coluna">Nome</th>
                     <th class="coluna">Foto</th>
                     <th class="coluna">Marca</th>
                     <th class="coluna">Tamanho</th>
                     <th class="coluna">Cor</th>
                     <th class="coluna">Valor</th>
                     
                     

         </tr>

    </thead>

   <tbody class="produtos">

   <?php 
          foreach($produtosDaLoja as $produtosParaVender){
              echo "<tr>

              <td class='tabela-linha'>{$produtosParaVender['nome']}</td>
              <td class='tabela-linha'><img src='{$produtosParaVender['Foto']}' class='produtos'></td>
              <td class='tabela-linha'>{$produtosParaVender['marca']}</td>
              <td class='tabela-linha'>{$produtosParaVender['tamanho']}</td>
              <td class='tabela-linha'>{$produtosParaVender['cor']}</td>
              <td class='tabela-linha'>{$produtosParaVender['valor']}</td>
             
              
              </tr>";
          };

         ?>


   </tbody>
   </main>
    


</table>