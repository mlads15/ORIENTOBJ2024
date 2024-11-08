<?php

require_once("modelo/Residencial.php");
require_once("modelo/Comercial.php");
require_once("modelo/Industrial.php");

echo "Informe-nos o tipo de consumidor que caracteriza o seu consumo mensal de energia: \n";

echo "1 - Residencial\n";
echo "2 - Comercial\n";
echo "3 - Industrial\n";

$tipoConsumo = null;

$opcao = readline("Escolha a opção refenrente ao seu consumo acima: ");

if($opcao == 1) {

    // $this->preco = 1.05;

    $tipoConsumo = new Residencial();
    $tipoConsumo->setPreco(1.05)->setConsumo(readline("Informe a quantidade de consumo de energia em KWh deste mês: "));

}

if($opcao == 2) {

    $tipoConsumo = new Comercial();
    $tipoConsumo->setConsumo(readline("Informe a quantidade de consumo de energia em KWh deste mês: "));

}