<?php

require_once('IConsumidorEnergia.php');

class Comercial implements IConsumidorEnergia {

    private bool $preco;
    private int $consumo;

    public function getValorFatura()
    {
        return "O valor final de sua fatura que terá de pagar será de: " . $this->preco * $this->consumo . " reais de acordo com seu consumo e necessidade.";
    }


    public function isPreco(): bool
    {
        return $this->preco;
    }

    public function setPreco(bool $preco): self
    {
        $this->preco = $preco;

        return $this;
    }

    public function getConsumo(): int
    {
        return $this->consumo;
    }

    public function setConsumo(int $consumo): self
    {
        $this->consumo = $consumo;

        return $this;
    }
}