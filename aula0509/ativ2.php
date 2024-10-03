<?php

class Produto {

    private string $descricao;
    private string $unidadeMedida;
    private int $quantidade;
    private float $valorUnitario;

    public function __toString()
    {
        $produto = "Produto: " . $this->descricao;
        $produto .= " (" . $this->unidadeMedida . ") | ";
        $produto .= $this->quantidade . " X " . $this->valorUnitario . " = " . $this->getValorTotal();
        return $produto;
    }

    public function getValorTotal() {
        $valorTotal = $this->valorUnitario * $this->quantidade;
        return $valorTotal;
    }
    
    public function getDescricao() {
        return $this->descricao;
    }

    
    public function setDescricao($descricao): self {
        $this->descricao = $descricao;

        return $this;
    }

   
    public function getUnidadeMedida() {
        return $this->unidadeMedida;
    }

    
    public function setUnidadeMedida($unidadeMedida): self {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }

    
    public function getQuantidade() {
        return $this->quantidade;
    }

    
    public function setQuantidade($quantidade): self {
        $this->quantidade = $quantidade;

        return $this;
    }

    
    public function getValorUnitario() {
        return $this->valorUnitario;
    }

    public function setValorUnitario($valorUnitario): self {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
}

$prod1 = new Produto();
$prod1->setDescricao(readline("\nInforme a descrição do produto: "));
$prod1->setUnidadeMedida(readline("\nInforme a unidade de medida do produto: \n"));
$prod1->setQuantidade(readline("\nInforme a quantidade do produto: \n"));
$prod1->setValorUnitario(readline("\nInforme o valor unitário do produto: \n"));
printf($this->getValorTotal);

$prod2 = new Produto();
$prod2->setDescricao(readline("\nInforme a descrição do produto: \n"));
$prod2->setUnidadeMedida(readline("\nInforme a unidade de medida do produto: \n"));
$prod2->setQuantidade(readline("\nInforme a quantidade do produto: \n"));
$prod2->setValorUnitario(readline("\nInforme o valor unitário do produto: \n"));
printf($this->getValorTotal);


$prod3 = new Produto();
$prod3->setDescricao(readline("\nInforme a descrição do produto: \n"));
$prod3->setUnidadeMedida(readline("\nInforme a unidade de medida do produto: \n"));
$prod3->setQuantidade(readline("\nInforme a quantidade do produto: \n"));
$prod3->setValorUnitario(readline("\nInforme o valor unitário do produto: \n"));
printf($this->getValorTotal);