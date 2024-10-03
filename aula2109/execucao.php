<?php

require_once("modelo/turma.php");
require_once("modelo/aluno.php");

$turma = new Turma();
$turma->setNome("Turma 2023");
$turma->setCurso("TDS");

//$alunos = array();

for ($i = 0; $i < 5; $i++) { 
    echo "\n--------ALUNO " . $i . " --------\n";
    $aluno = new Aluno();
    $aluno->setNome(readline("Informe o seu nome: "));
    $aluno->setIdade(readline("Informe a sua idade: "));
    $aluno->setTurma($turma);

    $turma->addAluno($aluno);

}

foreach($turma->getAlunos() as $alu) {
    echo $alu->getNome() . " - " . $alu->getIdade() . " anos - " . $alu->getTurma() . ".\n";
}