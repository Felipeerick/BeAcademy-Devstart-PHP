<?php 
                 /* Arrays associativos */
$a1 = [
   "nome" => "Felipe",
    "idade" => "19 anos",
    "numero" => "9234213",
    "notas" => [
        "7",
        "5",
        "3"
    ],
];

$a2 = [
    "nome" => "Lara",
   "idade" => "20 anos",
    "numero" => "9878987",

    "notas" => [
        "7",
        "5",
        "3",
    ],
];

$alunos = [
    $a1,
    $a2,
];

echo "nome: " . $a1["nome"];

?>