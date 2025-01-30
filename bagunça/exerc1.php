<?php

for ($i = 1; $i <= 10; $i++) { 
    $numero = readline("Informe um número: ");
    if ($numero >= 0) {
       echo "Positivo.\n";
    } else
        echo "Negativo.\n";
}
