
<select name="" id="">
  <option>Selecione o Ano</option>

<?php
for($ano = 1990; $ano <= 2020; $ano++){
     echo "<option>{$ano}</option>";
}

?>
</select>


<select name="" id="">
 
     <option>Selecione o mês</option>
     <?php
for($mes = 1; $mes <= 12; $mes++){
     echo "<option>{$mes}</option>";
}

?>

</select>


<select name="" id="">
 
     <option>Selecione o dia</option>
     <?php
for($dia = 1; $dia <= 31; $dia++){
     echo "<option>{$dia}</option>";
}

?>

</select>