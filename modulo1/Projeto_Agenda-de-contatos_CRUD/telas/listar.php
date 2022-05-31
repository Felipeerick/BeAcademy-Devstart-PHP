<h1 class="titulo">Listar Contatos</h1>

<table class="tabela-contatos">

       <thead>
 
             <tr>
  
               <th class="contatos-coluna">Nome</th>
               <th class="contatos-coluna">Email</th>
               <th class="contatos-coluna">Telefone</th>
               <th class="contatos-coluna" colspan='2'>ações</th>

             </tr>
       </thead>

     <tbody>
           
              <?php

                 foreach($contatos as $posicao => $cadaContato){
                 $partes = explode(";", $cadaContato);
                  echo "<tr>";
                  echo "<td class='tabela-contato-linha'>" . $partes[0] . "</td>";
                  echo "<td class='tabela-contato-linha'>" . $partes[1] . "</td>";
                  echo "<td class='tabela-contato-linha'>" . $partes[2] . "</td>";
                  echo "<td><a href='/excluir?id={$posicao}' class='button-excluir'>EXCLUIR</a></td>";
                  echo "<td><a href='/editar?id={$posicao}' class='button-editar'>EDITAR</a></td>";
                  echo "</tr>";
                };

                ?>
         
     </tbody>

</table>