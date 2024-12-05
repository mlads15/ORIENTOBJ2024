<?php

require_once("Caneta.php");

class CanetaAzul extends Caneta {

    //metodo sobreescrevendo o metodo da classe pai
    public function escrever() {

        echo "Caneta escrevendo em azul.\n";

    }

}