<?php

class Produto {

    private string $descricao;
    private string $unidadeMedida;

    public function getDados() {

        $dados = "Descrição: " . $this->descricao;
        $dados .= " | Un. Medida: " . $this->unidadeMedida;
        return $dados;
        // return "O produto " . $this->descricao . " de unidade " . $this->unidadeMedida . " está disponível.\n";

    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self {
        $this->descricao = $descricao;

        return $this;
    }

    public function getUnidadeMedida(): string {
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida(string $unidadeMedida): self {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }

}