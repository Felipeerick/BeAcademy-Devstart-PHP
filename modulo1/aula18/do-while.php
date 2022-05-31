<select name="" id="">

    <option> Selecione o ano </option>
 <?php
      
  $ano = 2000;

     do{  
                      
        echo "<option>{$ano}</option>";
        $ano++; 
     }while($ano <= 2020);
 
 

  ?>

</select>