<h1>Listar Categorias</h1>

<table>
   <thead>
       <th>#id</th>
       <th>Nome</th>
       <th>Descrição</th>
       <th>Ações</th>
   </thead>
      <tbody>
           <?php
           while($category = $result->fetch(\pdo::FETCH_ASSOC) ){
                extract($category);
               echo '<tr>';
                  echo '<td> {$category["id"]} </td>';
                  echo '<td> {$category["name"]} </td>';
                  echo '<td> {$category["description"]} </td>';
                  echo "<td>
                   <a href='/categorias/excluir?id='{$id}''>EXCLUIR</a>
                   <a href='/categorias/editar?id='{$id}''>EDITAR</a>
                   </td>";
                  echo '</tr>';
           };

           ?>
      </tbody>

</table>