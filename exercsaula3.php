<?php

function fatorial($numero){
    $fatorial = 1;
    for($i = $numero; $i > 0; $i--) {
        $fatorial = $fatorial * $i;
    }

    return $fatorial;
}

do {

    $numero = readline("Digite um número: ");
    $fatorial = fatorial($numero);
    echo $fatorial . "\n";

} while($numero != 0);