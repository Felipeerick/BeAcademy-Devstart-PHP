<?php

   $bandas = [["iron maiden",3],

          ["black metal", 4],

          ["aloalo", 5],
];

for($b = 0; $b < 3; $b++){
for($x = 0; $x < 3; $x++){
    echo $bandas[$x][$b];
}
};

?>