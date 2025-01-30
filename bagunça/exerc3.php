<?php


for ($i = 0; $i <= 5; $i++) { 
    $nome = readline("Informe seu nome: \n");
    (float) $altura = readline("Informe a sua altura em metros: \n");
    (float) $peso = readline("Informe o seu peso em kg: \n");

    $calculo = $peso / ($altura * $altura);

    print ($nome . " tem " . $peso . " kilogramas, " . $altura . " de altura e seu IMC é: " . $calculo . "\n");

}




