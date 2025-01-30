<?php

function Existe($vetor, $num) {
    foreach($vetor as $v) {
        if($v == $num)
        return true;
    }
        return false;
}

$vetorA = array();
echo "Digite cinco números para o Vetor A: " . "\n";
for($i = 0; $i < 5; $i++) {
    $numeros = readline("Informe um número: ");
    array_push($vetorA, $numeros);
}

$vetorB = array();
echo "Digite cinco números para o Vetor B: \n";
for($i = 0; $i < 5; $i++) {
    $numeros = readline("Informe um número: ");
    array_push($vetorB, $numeros);
}

// vetor D = união

$vetorD = array();
foreach($vetorA as $a)
    array_push($vetD, $a);
for($i = 0; $i <count ($vetorB); $i++) {
    array_push($vetorD, $vetorB[$i]);
}

echo "\nVetor D: ";
foreach($vetorD as $d) {
    echo $d . ",";
}

echo "\n";

// vetor C = intersecção

$vetorC = array();
foreach($vetorA as $a) {
    foreach($vetorB as $b) {
        if($a == $b) {
            array_push($vetorC, $a);
            break;
        }
     
    }
    
}

echo "\nVetor C: ";
foreach($vetorC as $c) {
    echo $c . ",";
}

echo "\n";
