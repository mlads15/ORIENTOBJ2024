<?php

require_once("modelo2/Carro.php");

class Fabricante {

    private string $nome;
    private string $sigla;

    public function __construct($n, $s) {

        $nome = $n;
        $sigla = $s;
        
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;

        return $this;
    }

    public function getSigla(): string {
        return $this->sigla;
    }

    public function setSigla(string $sigla): self {
        $this->sigla = $sigla;

        return $this;
    }
}

