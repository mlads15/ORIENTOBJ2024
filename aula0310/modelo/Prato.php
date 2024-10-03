<?php

require_once('Pedido.php');

class Prato {

    private int $numero;
    private string $nome;
    private float $valor;

    private function __construct($nu, $no, $va) {
      
        $this->numero = $nu;
        $this->nome = $no;
        $this->valor = $va;

    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}