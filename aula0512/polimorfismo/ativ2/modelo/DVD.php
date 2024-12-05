<?php

require_once("Midia.php");

class DVD extends Midia {

    public function getDados() {

        $dados = parent::getDados();
        return $dados;
        
    }

}