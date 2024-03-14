<?php

/*function Primo($num) {
    foreach ($num as $n) {
        for ($i = $num; $i <= 1; $i--) { 
            $num = readline("Digite um número: ");
            
        }

       /*if($num % 2 == 0) {
         return false;
        }
        else {
            return true;
         }*/ /*
     }
}

#FALHOOOOOOOU.

$vetorNum = array();
array_push($vetorNum, $num); */

function Primo($num) {
    $raiz = sqrt($num);
    for($i = 2; $i < $raiz; $i++){
        if($num % $i == 0){
            return false;
        }

        return true;
    }
}



