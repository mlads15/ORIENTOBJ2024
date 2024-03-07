<?php

$pessoas = array();

for($i = 1; $i <= 4; $i++) {
    echo "Pessoa" . $i . ":\n";
    $pessoa["nome"] = readline("Qual o seu nome? \n");
    $pessoa["idade"] = readline("Qual a sua idade? \n");
    $pessoa["cidadenatal"] = readline("Qual o nome da sua cidade natal? \n");
    $pessoa["profissao"] = readline("Qual sua profissão? \n");
}

/*foreach ($pessoa as $p) {
  array_push($pessoas, $p);
} */


array_push($pessoas, $pessoa);

$pessoavelha = $pessoas[0];
foreach($pessoas as $p) {
    if($p ["idade"] > $pessoavelha["idade"])
        $pessoavelha = $p;
}

echo "Dados da pessoa mais velha: \n";
echo "Nome: " . $p . "\n";
echo "Idade: " . $p . "\n";
echo "Cidade Natal: " . $p . "\n";
echo "Profissão: " . $p . "\n";




