<?php

class Prato {

    private string $descricao;
    private int $quantidade;
    private float $valorUnitario;

    public function getValorTotal() {
       $valorTotal = $this->quantidade * $this->valorUnitario;
    }

    public function __toString(){
        
    }

    public function getDescricao(): string{
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self{
        $this->descricao = $descricao;

        return $this;
    }

    public function getQuantidade(): int{
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade): self{
        $this->quantidade = $quantidade;

        return $this;
    }

    public function getValorUnitario(): float{
        return $this->valorUnitario;
    }

    public function setValorUnitario(float $valorUnitario): self{
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
}

$pratos = array();

for ($i = 0; $i < 3; $i ++) { 
    echo "\nPrato " . $i . ":\n";
    $prato1 = new Prato();
    $prato1->setDescricao(readline("Informe o nome descritivo do prato: "))
    ->setQuantidade(readline("Informe o número de quantidade do prato escolhido: "))
    ->setValorUnitario(readline("Informe o valor unitário do prato escolhido: "));

    array_push($pratos, $prato1);

}

$valorJanta = 0;

foreach($pratos as $prato) {
    echo $prato;
    $valorJanta = $valorJanta;
}

