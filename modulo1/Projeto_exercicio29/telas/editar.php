
        <h1 class="titulo">Editar contato</h1>

<hr> 

<form action="" method="post">
<input value="<?php echo $dados[0];?>" name="nome" type="text"size='99px' placeholder="Nome"class="input-cadastro">
<br>
<input value="<?php echo $dados[1];?>"name="email" type="text"size='99px'placeholder ="E-mail" class="input-cadastro"> 
<br>
<input value="<?php echo $dados[2];?>"name="telefone" type="text" size='99px'placeholder ="Telefone"class="input-cadastro"> 
<br>
<button type="submit" class="button">Enviar</button>

</form>