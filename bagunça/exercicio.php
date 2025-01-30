<?php

print "Exercício 1:\n";

$numero = 1;
while ($numero <= 10) {
    $numero = $numero + 1;
    echo $numero . "\n";
}

$num1 = 1;
do {
   print $num1 . "\n";
   $num1 = $num1 + 1;
} while ($num1 <= 10);

"\n";

for ($i = 1; $i <= 10; $i++) { 
    echo $i . "\n";
}

print "Exercício 2:\n";

$soma;

for ($i = 1; $i <= 100; $i++) { 
    $soma = $soma + $i;
    echo $soma . "\n";
}

print "Exercício 3:\n";

for ($i = 1; $i <= 50 ; $i++) { 
    if ($i % 3 == 0) { 
        echo $i . "\n";
    }
}
