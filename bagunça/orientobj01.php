<?php

class Monitor {
    //Atributos

    public $cor;
    public $resolucao;
    public $marca;

    //Metodos

    function ligar(){
        echo "O Monitor está ligado.\n";
    }

    function desligar(){
        echo "O Monitor está sendo desligado.\n";
    }

    function mostrarImagem(){
        echo "O Monitor está mostrando imagem.\n" /*. $this->resolucao .*/;
    }
}

//Programa Principal
$monitor1 = new Monitor();
$monitor1->cor = "Preto";
$monitor1->resolucao = "1080X1920";
$monitor1->marca = "AOC";
$monitor1->ligar();
$monitor1->mostrarImagem();
$monitor1->desligar();
echo "Cor do Monitor 1: " . $monitor1->cor . "\n";

$monitor2 = new Monitor();
$monitor2->cor = "Rosa";
$monitor2->resolucao = "1080x1920";
$monitor2->marca = "Dell";
$monitor2->ligar();
$monitor2->mostrarImagem();
$monitor2->desligar();
echo "Cor do Monitor 2: " . $monitor2->cor . "\n";
