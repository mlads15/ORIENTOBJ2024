<?php

require_once("modelo/Gerente.php");
require_once("modelo/Desenvolvedor.php");
require_once("modelo/Estagiario.php");
require_once("modelo/Funcionario.php");

do {

    echo "\n\nMENU DE FUNCIONÁRIOS:\n\n";

    echo "Funcionários:\n";
    echo "1 - Gerente\n";
    echo "2 - Desenvolvedor\n";
    echo "3 - Estagiário\n";
    echo "4 - Sair\n";

    $tipo = readline("Informe o tipo de funcionário: ");

    $funcionario = null;

    switch ($tipo) {

        case 1:

            $gerente = new Gerente();
            $gerente->setNome(readline("Informe o nome do Gerente: "));
            $gerente->getCargo();
            $gerente->setSalarioBase(1500);
            $gerente->setValorCalculo(4.5);
            $gerente->calculaSalario();

            echo $gerente->calculaSalario();

            break;

        case 2:

            $desenv = new Desenvolvedor();
            $desenv->setNome(readline("Informe o nome do Gerente: "));
            $desenv->getCargo();
            $desenv->setSalarioBase(1500);
            $desenv->setValorCalculo(2.3);
            $desenv->calculaSalario();

            echo $desenv->calculaSalario();

            break;

        case 3:

            $estagiario = new Estagiario();
            $estagiario->setNome(readline("Informe o nome do Gerente: "));
            $estagiario->getCargo();
            $estagiario->setSalarioBase(1500);
            $estagiario->setValorCalculo(0.8);

            echo $estagiario->calculaSalario();

            break;

        case 4:

            if($tipo == 0) {

                exit;

            }

    }

} while ($tipo != 0);