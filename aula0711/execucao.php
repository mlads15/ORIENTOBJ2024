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

    $opcao = readline("Informe a opção: ");

    echo "\n";

    switch ($opcao) {

        case 1:
            echo "\nSeja bem vindo(a) à Foz do Iguaçu, a cidade que apresenta uma grande variedade de fauna e flora brasileira, além de abrigar a espetacular e mundialmemte conhecida Catarátas do Iguaçu, onde as águas do Rio Iguaçu desaguam-se e entram em contato com o Rio Paraná.";

            //Ler o que o usuário deseja cadastras
            //$tipoEspaco

            if ($opcao == 2) {
                echo "\nÉ um Hotel de boa qualidade e preço que você procura?";

                $e = new ();
                $e->setNome()
            }

} while ($opcao != 0);