<?php

class Mago {

    protected $nome;
    protected Poder $poder;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getPoder(): Poder
    {
        return $this->poder;
    }

    public function setPoder(Poder $poder): self
    {
        $this->poder = $poder;

        return $this;
    }
}