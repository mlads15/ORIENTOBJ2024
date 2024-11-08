<?php

require_once("Mago.php");

class Combatente extends Mago {

    private int $forcaDeAtaque;

    public function lancarPoder() {

        $dados = "O Mago chamado " . $this->nome . " possui Força de " . $this->forcaDeAtaque . " e lançou o Poder " . $this->poder . " com Força Total (FT) de " . $forcaTotal;

        // echo "Poder lançado.";

    }

    public function getForcaDeAtaque(): int
    {
        return $this->forcaDeAtaque;
    }

    public function setForcaDeAtaque(int $forcaDeAtaque): self
    {
        $this->forcaDeAtaque = $forcaDeAtaque;

        return $this;
    }
}