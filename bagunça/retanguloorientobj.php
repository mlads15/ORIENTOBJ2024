<?php

class Retangulo {

    public $altura;
    public $base;

    //Construtor
    /*function __construct() {
        echo "Objeto criado.\n";
    }*/

    function calcArea() {
        echo "A área calculada desse retângulo é de: " . $this->altura * $this->base . ".\n";
    }

    function calcPerimetro() {
        echo "\nO perímetro calculado desse retângulo é de: " . 2 * ($this->altura + $this->base) . ".\n";
    }

}

/*um loop de repetição FOR também poderia ser utilizado, ao invés de repetir a leitura dos dados três vezes, 
já que já possuo o número pedido de retângulos.*/

/*$pessoa = new Pessoa($blabla, $lalala);*/

$retangulo1 = new Retangulo();
$retangulo1->altura = readline("\nInforme a altura estimada desse retângulo: \n");
$retangulo1->base = readline("\nInforme a base estimada desse retângulo: \n");

$retangulo1->calcArea();
$retangulo1->calcPerimetro();

$retangulo2 = new Retangulo();
$retangulo2->altura = readline("\nInforme a altura estimada do segundo retângulo: \n");
$retangulo2->base = readline("\nInforme a base estimada do segundo retângulo: \n");

$retangulo2->calcArea();
$retangulo2->calcPerimetro();

$retangulo3 = new Retangulo();
$retangulo3->altura = readline("\nInforme a altura estimada do terceiro retângulo: \n");
$retangulo3->base = readline("\nInforme a base estimada do terceiro retângulo: \n");

$retangulo3->calcArea();
$retangulo3->calcPerimetro();
