<?php

require_once("Produto.php");

class Livro extends Produto {

    private string $autor;

    public function getDados() {

        $dados = parent::getDados();
        $dados .= " | Autor: " . $this->autor;
        return $dados;

        // return "O livro " . parent::getDados() . " foi escrito por " . $this->autor . ".\n";
        
    }

    public function getAutor(): string {
        return $this->autor;
    }

    public function setAutor(string $autor): self {
        $this->autor = $autor;

        return $this;
    }
}