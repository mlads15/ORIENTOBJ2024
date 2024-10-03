<?php

require_once("modelo/Funcionario.php");
require_once("modelo/Departamento.php");

for ($i = 0; $i <= 5; $i++) { 

    echo "------- FUNCIONÁRIO " . $I . " -------";

    $f = new Funcionario();
    $f->setNome(readline("Qual é o seu nome? "));
    $f->setCargo(readline("Qual é o seu cargo no departamento? "));
    $f->setSalario(readline("Qual é a média de salário mensal que você recebe? "));
    $f->setDepto(readline("Qual é o departamento que você re? "));
}