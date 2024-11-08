<?php

require_once("Mago.php");

class Curandeiro extends Mago {

    private int $forcaDeCura;

    public function lancarPoder() {

        $dados = "O Mago chamado " . $this->nome . " possui Força de " . $this->forcaDeCura . " e lançou o Poder " . $this->poder . " com Força Total (FT) de " . $forcaTotal;

    }

    public function getForcaDeCura(): int 
    {
        return $this->forcaDeCura;
    }

    public function setForcaDeCura(int $forcaDeCura): self
    {
        $this->forcaDeCura = $forcaDeCura;

        return $this;
    }
}