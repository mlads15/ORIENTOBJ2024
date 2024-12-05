<?php

require_once("modelo/CD.php");
require_once("modelo/DVD.php");
require_once("modelo/Midia.php");

$midias = array();

for($i = 1; $i <= 5; $i++) {

    $tipo = "";

    do {

        $tipo = readline("Informe o tipo de Mídia que você deseja comprar: (CD ou DVD): ");

    } while ($tipo != "CD" && $tipo != "DVD");

    $midia = null;
    if($tipo == "CD") {

        $midia = new CD();

    } else {

        $midia = new DVD();

    }

    $midia->setDescricao(readline("Informe a descrição do produto: "));
    $midia->setPrecoPago(readline("Informe o preço pago pelo produto: "));

    array_push($midias, $midia);

}

echo "\n\n";
foreach($midias as $m) {

    echo $m->getTipo() . " - " . $m->getDados() . "\n";

}