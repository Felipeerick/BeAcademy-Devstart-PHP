
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
  <input type="text" name="n1">
    <br><br> 
  <input type="text" name="n2">
     <br>
   
    
    <div class="container" style="display: flex">
   <button name="button-soma">Somar</button> <br>
   <button name="button-sub">Subtrair</button> <br>
   <button name="button-mult">multiplicar</button> <br>
   <button name="button-divid">dividir</button> <br>
   </div>
</form>


<?php 
 
    if(isset($_POST["button-soma"])){
   
    echo $_POST["n1"] + $_POST["n2"]; 
    }

       if(isset($_POST["button-sub"])){
        echo $_POST["n1"] - $_POST["n2"];
       }
        else if(isset($_POST["button-mult"])){
        echo $_POST["n1"] * $_POST["n2"]; 

       }else if(isset($_POST["button-divid"])){
           

        echo $_POST["n1"] / $_POST["n2"];
       };
    
?>
</body>
</html>
