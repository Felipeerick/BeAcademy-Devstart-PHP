<?php

include "acoes.php";

$a1 = new Aluno();
$a1-> nome = "Felipe";
$a1-> cpf = "343443";



$p1 = new Professor();
$p1 -> nome = "jefferson";
$p1 -> materia = "matemática";
$p1 -> id = "01";


$d1 = new Disciplina();
$d1 -> nome = "matemática";
$d1 -> cargaHoraria = "150 horas";
$d1 -> diasDaSemana = "Segunda, terça e sexta";

$c1 = new Curso();
$c1 -> nome = "Análise e desenvolvimento de sistemas";
$c1 -> valor = 350;
$c1 -> diasDaSemana = "terça e quarta";
?>