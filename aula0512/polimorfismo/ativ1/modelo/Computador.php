<?php

require_once("Produto.php");

class Computador extends Produto {

    private string $processador;
    private string $memoria;

    public function getDados() {

        $dados = parent::getDados();
        $dados .= " | Processador: " . $this->processador;
        $dados .= " | Memória: " . $this->memoria;
        return $dados;

        // return "O " . parent::getDados() . " possui processador de " . $this->processador . " e memória de " . $this->memoria . ".\n";
        
    }

    public function getProcessador(): string {
        return $this->processador;
    }

    public function setProcessador(string $processador): self {
        $this->processador = $processador;

        return $this;
    }

    public function getMemoria(): string {
        return $this->memoria;
    }

    public function setMemoria(string $memoria): self {
        $this->memoria = $memoria;

        return $this;
    }
}