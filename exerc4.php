<?php

for ($i = 1; $i <= 10; $i++) { 
    $numero = readline("Digite um único número: ");
    if ($numero >= 0) {
       echo $numero * 2 . "\n";
    } else
        echo $numero * 3 . "\n";
}