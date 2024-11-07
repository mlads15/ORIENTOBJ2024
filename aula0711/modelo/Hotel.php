<?php

require_once("Espaco.php");

class Hotel extends Espaco {

    protected int $numeroEstrelas;
    protected bool $cafeIncluso;

    public function getDadosHotel() {

        $dados = "HOTEL | ";
        $dados .= $this->getDadosEspaco();
        $dados .= " | Estrelas : " . $this->numeroEstrelas;
        $dados .= " | Café Incluso: " . ($this->cafeIncluso ? "Sim" : "Não");

        // return $this->numeroEstrelas . " - Café Incluso: " . $this->cafeIncluso . "\n";

    }

    public function getNumeroEstrelas(): int
    {
        return $this->numeroEstrelas;
    }

    public function setNumeroEstrelas(int $numeroEstrelas): self
    {
        $this->numeroEstrelas = $numeroEstrelas;

        return $this;
    }

    public function isCafeIncluso(): bool
    {
        return $this->cafeIncluso;
    }

    public function setCafeIncluso(bool $cafeIncluso): self
    {
        $this->cafeIncluso = $cafeIncluso;

        return $this;
    }
}