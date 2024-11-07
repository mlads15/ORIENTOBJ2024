<?php

require_once("Espaco.php");

class Restaurante extends Espaco {

    protected string $tipoComida;

    public function getDadosRestaurante() {

        return "Este restaurante oferece: " . $this->tipoComida . " de variação para comidas." . "\n";

    }


    public function getTipoComida(): string
    {
        return $this->tipoComida;
    }

    public function setTipoComida(string $tipoComida): self
    {
        $this->tipoComida = $tipoComida;

        return $this;
    }
}