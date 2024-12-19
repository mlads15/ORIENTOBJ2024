<?php

require_once("modelo/Funcionario.php");

class Desenvolvedor extends Funcionario {

    protected float $valorCalculo;
    protected string $nome;

    public function calculaSalario() {

        return "O funcionário " . $this->nome . ", cargo " . $this->getCargo() . ", possui salário de R$ " . $this->salarioBase * $this->valorCalculo . ".\n";

    }

    public function getCargo() {

        $getCargo = "Desenvolvedor";
        return $getCargo;

    }

    public function getValorCalculo(): float {
        return $this->valorCalculo;
    }

    public function setValorCalculo(float $valorCalculo): self {
        $this->valorCalculo = $valorCalculo;

        return $this;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;

        return $this;
    }


}