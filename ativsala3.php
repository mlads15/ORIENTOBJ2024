<?php

class Pessoa {

    private $nome;
    private $sobrenome;
    private $idade;

    //to string
    public function __toString() {
        return
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome): self{
        $this->nome = $nome;

        return $this;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome): self{
        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade): self{
        $this->idade = $idade;

        return $this;
    }
}



$opcao = 0;

do {

 echo "\n-----------MENU-----------\n";

 echo "1- Inserir\n";

 echo "2- Listar\n";

 echo "0- SAIR\n";

 $opcao = readline("Escolha a opção: ");

 switch($opcao) {

 case 0:
    echo "Programa encerrado!\n";
    break;
 
 case 1:
    echo "\n";
    $pessoa = new Pessoa ();
    $pessoa->setNome(readline("Informe o nome da pessoa: "));
    $pessoa->setSobrenome(readline("Informe o sobrenome da pessoa: "));
    $pessoa->setIdade(readline("Informe a idade da pessoa: "));
    break;

 case 2:
    echo "Listando....\n";
    break;

 default:
    echo "Opção INVÁLIDA!\n";
}

} 

while($opcao != 0);