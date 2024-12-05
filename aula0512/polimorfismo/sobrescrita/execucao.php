<?php

require_once("modelo/Caneta.php");
require_once("modelo/CanetaAzul.php");
require_once("modelo/CanetaVermelha.php");

$caneta = new Caneta();
$caneta->escrever();

$canetaAzul = new CanetaAzul();
$canetaAzul->escrever();

echo "\n";

$canetaVerm = new CanetaVermelha();
$canetaVerm->escrever();
$canetaVerm->escreverEspec();
$canetaVerm->escreverPai();