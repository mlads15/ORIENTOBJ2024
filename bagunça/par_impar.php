<?php

function isPar($num){

    if ($num % 2 == 0) {
        return true;
 
        return false;

    }
}


$num = 5;
while ($num != 0) {
    
    $num = readline("Digite um número: ");

    $isPar = isPar($num);
    if ($isPar) {
       echo "\nEste número é par.\n";
    } else {
        echo "\nEste número é ímpar.\n";
    }

}

//pode ser usado como base para o exercício de primo.
