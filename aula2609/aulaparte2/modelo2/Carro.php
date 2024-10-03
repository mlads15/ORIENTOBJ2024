<?php 

require_once("modelo2/Fabricante.php");

class Carro {

    private string $modelo;
    private int $anoFabricacao;
    private Fabricante $fabricante;

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getAnoFabricacao(): int
    {
        return $this->anoFabricacao;
    }

    public function setAnoFabricacao(int $anoFabricacao): self
    {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }

    public function getFabricante(): Fabricante
    {
        return $this->fabricante;
    }

    public function setFabricante(Fabricante $fabricante): self
    {
        $this->fabricante = $fabricante;

        return $this;
    }
}

