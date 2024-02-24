<?php

$multiplica = 0;

$numero1 = readline("Escolha um número para essa variável: ");
$numero2 = readline ("\nAgora, escolha outro número para a segunda variável: ");

for($i = 1; $i <= $numero2; $i++){
  $multiplica = $multiplica + $numero1;
}
echo "O resultado da multiplicação é: " . $multiplica . "\n";

