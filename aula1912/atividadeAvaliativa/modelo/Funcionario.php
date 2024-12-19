<?php

abstract class Funcionario {

    protected float $salarioBase;
    protected float $valorCalculo;

    public abstract function calculaSalario();
    public abstract function getCargo();

    public function getSalarioBase(): float {
        return $this->salarioBase;
    }

    public function setSalarioBase(float $salarioBase): self {
        $this->salarioBase = $salarioBase;

        return $this;
    }

    public function getValorCalculo(): float {
        return $this->valorCalculo;
    }

    public function setValorCalculo(float $valorCalculo): self {
        $this->valorCalculo = $valorCalculo;

        return $this;
    }


}