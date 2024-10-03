<?php

require_once('modelo/Pedido.php');
require_once('modelo/Prato.php');

$pratos = array(

    New Prato(1, "Camarão à Milanesa", 110.00),
    New Prato(2, "Pizza Margherita", 80.00),
    New Prato(3, "Macarrão à Carbonara", 60.00),
    New Prato(4, "Bife à Parmegiana", 75.00),
    New Prato(5, "Risoto ao Funghi", 70.00),
    
);

do {

echo "\n\n------MENU------\n";
echo "1. Cadastrar Pedido\n";
echo "2. Cancelar Pedido\n";
echo "3. Listar Pedido\n";
echo "4. Exibir Total de Vendas\n";
echo "5. Sair\n";

$opcao = readline("Informe a opção escolhida: ");

echo "\n";

    switch($opcao) {

        case 1: 

            $pedidos = new Pedido();
            $pedidos->setNomeCliente(readline("Informe-nos seu nome: "))->setNomeGarcom(readline("Informe-nos o nome do Garçom: "))->setPrato("Informe-nos o número do prato que você escolheu: ");

            $pedidos = array ();

        case 2:

            // readline("Você gostaria mesmo de cancelar seu pedido?");

            // if () {
            //     # code...
            // }

            array_splice($pedidos);

    }

        // case 3:



}