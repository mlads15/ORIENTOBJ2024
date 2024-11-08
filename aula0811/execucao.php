<?php

require_once("modelo/Poder.php");
require_once("modelo/Curandeiro.php");
require_once("modelo/Combatente.php");
require_once("modelo/Mago.php");

//criar os objetos 

// $poder = new Poder();
// $poder->setDescricao(readline("Informe a descrição de poder do Seu Mago: "))->setForca(readline("Informe a quantidade de força atribuída ao Seu Mago: "));

// if($descricao == "Recupera energia super") {

//     $this->forca = $this->forcaDeCura + 20 / 100;

// }

$poder = new Poder ("Recupera energia", 0);
$poder = new Poder ("Recupera energia super ", 20);
$poder = new Poder ("Golpe normal", 0);
$poder = new Poder ("Golpe especial", 15);

//criar objetos magos

// $mago = new Mago ();
// $mago->setNome(readline("Informe o nome do Seu Mago: "))->getPoder();

// if($descricao == "Recupera energia") {

//     $forca = $forca;

// } else if ($descricao == "Recupera energia super") {

//     $forca = $forcaMago + (20 / 100);

// }

$curan = new Curandeiro();
$curan->setNome("Zin Owlah")->getPoder("Recupera energia super")->getForcaTotal(150);

$comba = new Combatente();
$comba->setNome("Eeris Monwoo")->getPoder("Golpe especial")->getForcaTotal(160);

$curan->lancarPoder();
$comba->lancarPoder();
