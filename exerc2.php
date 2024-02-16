<?php 

$numero = readline("Digite um número: ");

for ($i = $numero - 1; $i >= 1; $i--) { 
    if ($i > 1) {
        echo $i . ", ";
    } else {
        echo $i . "\n";
    }
    
}