<?php

class Escola {

    //atributos
    private string $nome;
    private string $endereco;
    private int $qtdAlunos;

    /*public function __construct($n = "", $en = "", $qtd = 0){
        $nome = $n;
        $endereco = $en;
        $qtdAlunos = $qtd;
    }*/

    //gets e sets
    
    public function getNome(): string{
        return $this->nome;
    }

    public function setNome(string $nome): self{
        $this->nome = $nome;

        return $this;
    }

    public function getEndereco(): string{
        return $this->endereco;
    }

    public function setEndereco(string $endereco): self{
        $this->endereco = $endereco;

        return $this;
    }

    public function getQtdAlunos(): int{
        return $this->qtdAlunos;
    }

    public function setQtdAlunos(int $qtdAlunos): self{
        $this->qtdAlunos = $qtdAlunos;

        return $this;
    }
}

//programa principal

$escolas = array();

for ($i = 0; $i < 4; $i++) { 
    $escola = new Escola ();
    $escola->setNome(readline("Qual o nome dessa escola? "))
    ->setEndereco(readline("Qual o endereço dessa escola? "))
    ->setQtdAlunos(readline("Qual a quantidade de alunos dessa escola? "));
}

array_push($escolas, $escola);

print_r($escolas);

foreach ($escolas as $esc) {
    //echo $esc;
    printf("%s | %s | %d \n", $esc->getNome(), $esc->getEndereco(), $esc->getQtdAlunos());
}

//1.3
$escolaMaisAluno = $escolas[0];

foreach ($escolas as $esc) {
    if($esc->getQtdAlunos() > $escolaMaisAluno->getQtdAlunos())
        $escolaMaisAluno = $esc;
}

echo "\nA escola com mais alunos é: ";
printf("%s | %s | %d \n", 
    $escolaMaisAluno->getNome(), $escolaMaisAluno->getEndereco(), $escolaMaisAluno->getQtdAlunos());