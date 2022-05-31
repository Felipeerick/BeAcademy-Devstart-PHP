<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
      <input type="text" name="nome" placeholder="nome"> <br> <br>
      <input type="text" name="cidade" placeholder="cidade"> <br> 
      <button type="submit" name="button-formulario">Enviar</button>

    </form>

    <?php 
       
      echo "Seu nome é: ", $_POST["nome"], " e mora na cidade de: ", $_POST["cidade"];
       
      
    ?>
</body>
</html>