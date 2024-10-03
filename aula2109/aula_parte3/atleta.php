<?php 

class Atleta {

    private string $nome;
    private string $idade;
    private string $esporte;
    private string $pais;

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;

        return $this;
    }

    public function getIdade(): string {
        return $this->idade;
    }

    public function setIdade(string $idade): self {
        $this->idade = $idade;

        return $this;
    }

    public function getEsporte(): string {
        return $this->esporte;
    }

    public function setEsporte(string $esporte): self {
        $this->esporte = $esporte;

        return $this;
    }

    public function getPais(): string {
        return $this->pais;
    }

    public function setPais(string $pais): self {
        $this->pais = $pais;

        return $this;
    }
}