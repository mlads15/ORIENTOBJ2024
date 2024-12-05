<?php

require_once("modelo/Produto.php");
require_once("modelo/Livro.php");
require_once("modelo/Computador.php");
require_once("modelo/Balde.php");

$produto = new Produto();
$produto->setDescricao("Garrafa");
$produto->setUnidadeMedida("UN");
echo $produto->getDados();

echo "\n";

$livro = new Livro();
$livro->setDescricao("IT: A Coisa");
$livro->setUnidadeMedida("VL");
$livro->setAutor("Stephen King");
echo $livro->getDados();

echo "\n";

$computador = new Computador();
$computador->setDescricao("Notebook");
$computador->setUnidadeMedida("UN");
$computador->setProcessador("Intel");
$computador->setMemoria("iRISx");
echo $computador->getDados();

echo "\n";

$balde = new Balde();
$balde->setDescricao("Balde Rosa");
$balde->setUnidadeMedida("UN");
$balde->setCapacidade(3);
echo $balde->getDados();