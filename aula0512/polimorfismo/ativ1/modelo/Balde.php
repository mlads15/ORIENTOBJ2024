<?php 

require_once("Produto.php");

class Balde extends Produto {

    private int $capacidade;

    public function getDados() {

        $dados = parent::getDados();
        $dados .= " | Capacidade: " . $this->capacidade . " litros.\n";
        return $dados;

        // return "O " . parent::getDados() . " possui capacidade de " .  $this->capacidade . ".\n";
        
    }

    public function getCapacidade(): int {
        return $this->capacidade;
    }

    public function setCapacidade(int $capacidade): self {
        $this->capacidade = $capacidade;

        return $this;
    }
}