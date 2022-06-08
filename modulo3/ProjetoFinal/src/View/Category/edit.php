<h1>Editar Categoria</h1>

<form action="" method="POST">
    <label for="name">Nome</label>
    <input value="<?php echo $data["name"]; ?>" type="text" name="name" id="name">

     <label for="description">description</label>
     <textarea id='description' name="description"><?php echo $data["description"]; ?></textarea>

       <button type="submit">Atualizar</button>
</form> \