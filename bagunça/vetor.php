<?php

//Array indexado
$vetor = array(2, 5, 7, 8, -1);
              //0, 1, 2, 3, 4
foreach ($vetor as $num) {
    echo $num . "\n";
}

for ($i = 0; $i < count($vetor); $i++) { 
    echo $vetor[$i] . "\n";
}
