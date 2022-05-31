<?php
 $sapato = [
     "marca" => "nike",
     "tamanho" => "33",
      "valor" => "99.99 reais",
 ];

 $calca = [
   "marca" => "jeans",
    "tamanho" => 36,
     "valor" => "60 reais"

 ];

 $itens = [
    $sapato,
    $calca,
 ];

?>
<style>
    body{
        background-image: url(https://source.unsplash.com/random);
    }

    .tabela{
        padding: 20px;
        
        position: absolute;
        left: 410px;
        top: 200px;
       height: 200px;
       
    }

    .titulo{
        background-color: aqua;
    }
</style>

<table class="tabela">
         
           <caption class="titulo">tabela de produtos</caption>
  
            <thead>
                 <tr style='background-color: yellow'>
                     <td>marca</td>
                     <td>tamanho</td>
                     <td>valor</td>
                 </tr>

            </thead>
                    
            <tbody>
                    <?php 
                    foreach($itens as $item){  
                    echo "<tr> 
                        <td style='background-color: aqua'>{$item['marca']}</td>
                        <td style='background-color: aqua'>{$item['tamanho']}</td>  
                        <td style='background-color: aqua'>{$item['valor']}</td> 
                    </tr>";
                };




                    ?>


            </tbody>



</table>