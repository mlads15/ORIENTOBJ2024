<?php

require_once("CanetaAzul.php");

class CanetaVermelha extends CanetaAzul {

    public function escrever() {

        echo "Caneta escrevendo em vermelho.\n";

    }

    public function escreverEspec() {

        $this->escrever();

    }

    public function escreverPai() {

        parent::escrever();

    }

}