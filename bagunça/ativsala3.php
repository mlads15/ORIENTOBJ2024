<?php

/*class Pessoa {

    private $nome;
    private $sobrenome;
    private $idade;

    //to string
    public function __toString() {
        return sprintf("%s %s, %d anos\n",
            $this->nome, $this->sobrenome, $this->idade);
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

$pessoas = array();

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
        array_push($pessoas, $pessoa);

    case 2:
        if(count($pessoas) > 0) {
            echo "\nPessoas cadastradas:\n";
            foreach($pessoas as $p)
                echo $p;
        } else
            echo "\nNão há pessoas cadastradas!\n";
        
        break;

    case 3: 
        echo "Pessoas disponíveis: ";
        $i = 1;
        foreach ($pessoas as $p) {
            echo $i . ": " . $p . "\n";
            $i++;
        }

    $idx = readline("Qual pessoa você gostaria de excluir? ");
    $idx--;

    if ($idx >= 0 && < count($pessoas)) {
        array_splice
        
    }
    

    default:
        echo "Opção INVÁLIDA!\n";
    }

} while($opcao != 0); */
