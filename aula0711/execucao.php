<?php

require_once("modelo/Espaco.php");
require_once("modelo/Hotel.php");
require_once("modelo/PontoTuristico.php");
require_once("modelo/Restaurante.php");

function listarEspacos(array $espacos) {

    echo "Espaços Cadastrados: \n";

    $i = 1;

    foreach($espacos as $e) {

        echo $i . "- " . $e;
        $i++;

    }

}

$opcao = 0;
$espacos = array();

do {

    /* 
    
        $hotel = new Hotel ();
        $hotel->setNome(readline("Informar o nome do espaço: "));

        $possuiCafe = readline("Possui cafe incluso? (1 - Sim ou 2 - -Não)");

        if(possuiCafe == 1) {

            $hotel->setCafeIncluso(true);

        } else {

            $hotel->setCafeIncluso(false);

            print_r($hotel);

        } while ($opcao != 0);
    
    */

    echo "\n\n------MENU------\n";
    echo "1- Cadastrar Espaço\n";
    echo "2- Excluir Espaço\n";
    echo "3- Listar Espaços\n";
    echo "0- Sair\n";

    $opcao = readline("Informe a opção: \n");

    echo "\n";

    switch ($opcao) {

        case 1:

            echo "Seja bem vindo(a) à Foz do Iguaçu, a cidade que apresenta uma grande variedade de fauna e flora brasileira, além de abrigar a espetacular e mundialmemte conhecida Catarátas do Iguaçu, onde as águas do Rio Iguaçu desaguam-se e entram em contato com o Rio Paraná.\n";

            //Ler o que o usuário deseja cadastras
            //$tipoEspaco

            $tipoEspaco = readline("\nInforme o tipo de espaço que você deseja cadastrar: \n");

            if ($tipoEspaco == "Hotel") {

                echo "\nÉ um Hotel que você procura cadastrar? \n";

                $hotel = new Hotel();
                $hotel->setNome(readline("\nInforme o nome do hotel que você irá cadastrar: \n"));
                $hotel->setEndereco(readline("\nInforme o endereço deste hotel que você deseja cadastrar: \n"));
                $hotel->setNumeroEstrelas(readline("\nInforme o número de estrelas que este hotel possui: \n"));

                $possuiCafe = readline("\nPossui cafe incluso? (1 - Sim ou 2 - -Não)\n");

                if($possuiCafe == 1) {

                    $hotel->setCafeIncluso(true);

                } else {

                    $hotel->setCafeIncluso(false);

                    print_r($hotel);

                } //while ($opcao != 0);

            } elseif ($tipoEspaco == "Restaurante") {

                echo "\nVocê deseja cadastrar um restaurante? Está bem! Informe-nos os dados necessários para este cadastro: \n";

                $rest = new Restaurante();
                $rest->setNome(readline("\nDigite o nome do restaurante: \n"));
                $rest->setEndereco(readline("\nInforme o endereço do restaurante: \n"));
                $rest->setTipoComida(readline("\nInforme o tipo de comida que o restaurante fornecerá para os clientes: \n"));

                return $rest;

            } else {

                echo "\nAh, então você deseja cadastrar um ponto turístico à nossa lista? Informe as informações necessárias para o cadastro.\n";

                $ponTuri = new PontoTuristico();
                $ponTuri->setNome(readline("\nDigite o nome do ponto turístico: \n"));
                $ponTuri->setEndereco(readline("\nInforme o endereço deste ponto turístico: \n"));
                $ponTuri->setDuracaoDaVisita(("\nInforme a duração exata da visita no ponto turístico: \n"));

                return $ponTuri;

            }

    }

} while ($opcao != 0);