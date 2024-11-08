<?php

class Poder {

    private string $descricao;
    private int $forca;

    public function __construct(string $d, int $f) {
        
        $this->descricao = $d;
        $this->forca = $f;

    }

    public function getForcaTotal(int $forcaMago): float {
        $forcaTotal = $forcaMago + (1+$this->forca / 100);
        return $forcaTotal;


        // return 0.0;

        // $dados = "A Força Total (FT) de " . $this->descricao . " calculada do Mago é de: " . $this->forca;

    }


    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getForca(): int
    {
        return $this->forca;
    }

    public function setForca(int $forca): self
    {
        $this->forca = $forca;

        return $this;
    }
}