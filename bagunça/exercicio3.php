<?php

/* for ($i=0; $i < 4; $i++) { 
    $t["curso"] = readline("Qual o seu curso? \n");
    $t["ano"] = readline("Em que ano você está? \n");
    $t["quantAlunos"] = readline("Qual a quantidade de alunos na sua turma? \n");
}

//$totalAlunos = array($t["quantAlunos"]);

//array_push($totalAlunos, $t);

echo "A quantidade total de alunos no campus é de: " . $totalAlunos;

minha tentiva acima. comparar pós aula.
*/

$turmas = array();

//ler as turmas
for ($i=1; $i < 4; $i++) { 
    $turma = array();
    $turma["curso"] = readline("Informe o curso da turma " . $i . ": \n");
    $turma["ano"] = readline("Informe o ano da turma " . $i . ": \n");
    $turma["quantAlunos"] = readline("Informe a quantidade de alunos da turma " . $i . ": \n");

    array_push($turmas, $turma);
}

//print_r($turmas);

$totalAlunos = 0;
foreach($turmas as $t){
    $totalAlunos = $totalAlunos + $t["quantAlunos"];
}

echo "O total de alunos no campus é: " . $totalAlunos . ".";
