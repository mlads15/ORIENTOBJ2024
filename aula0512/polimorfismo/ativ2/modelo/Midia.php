<?php

class Midia {

    private string $descricao;
    private float $precoPago;

    public function getDados() {

        $dados = "Descrição: " . $this->descricao;
        $dados .= " | Preço Pago: R$ " . number_format($this->precoPago, 2, "," , ".");
        return $dados;

    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self {
        $this->descricao = $descricao;

        return $this;
    }

    public function getPrecoPago(): float {
        return $this->precoPago;
    }

    public function setPrecoPago(float $precoPago): self {
        $this->precoPago = $precoPago;

        return $this;
    }
}