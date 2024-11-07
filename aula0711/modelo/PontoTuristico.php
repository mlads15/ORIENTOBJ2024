<?php

require_once("Espaco.php");

class PontoTuristico extends Hotel {

    protected int $duracaoDaVisita;

    public function getDadosPontoTuristico() {

        return "A visita dura: " . $this->duracaoDaVisita . "minutos." . "\n";

    }

    public function getDuracaoDaVisita(): int
    {
        return $this->duracaoDaVisita;
    }

    public function setDuracaoDaVisita(int $duracaoDaVisita): self
    {
        $this->duracaoDaVisita = $duracaoDaVisita;

        return $this;
    }
}