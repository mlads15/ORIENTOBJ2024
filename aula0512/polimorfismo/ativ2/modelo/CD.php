<?php

require_once("Midia.php");

class CD extends Midia {

    public function getDados() {

        $dados = parent::getDados();
        return $dados;
        
    }

    

}