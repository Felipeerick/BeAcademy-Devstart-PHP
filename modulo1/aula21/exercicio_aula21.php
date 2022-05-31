<ul>

    <?php
       
     $frutas = ["1 " => "manga","2" => "abacate","3" => "pera", "4" => "abacate", "5" => "morango","6" => "frambuesa"];
/*
     for($x = 0; $x < 7; $x++){
           echo "<li>". $frutas[$x]. "</li>"; 
        };
     */

     foreach($frutas as $a => $b){
        echo "<li>. {$a} .'\t => \t'. {$b} . </li>"; 
     }
    ?>

</ul>