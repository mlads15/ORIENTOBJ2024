<?php

require_once("util/Conexao.php");
require_once("modelo/ClienteDAO.php");
require_once("modelo/ClientePJ.php");
require_once("modelo/ClientePF.php");

// $conex = new Conexao();
$con = Conexao::getCon();
print_r($con);

do {
    
    echo "\n-----CADASTRO DE CLIENTES-----\n";
    echo "1- Cadastrar Cliente PF\n";
    echo "2- Cadastrar Cliente PJ\n";
    echo "3- Listar Clientes\n";
    echo "4- Buscar Clientes\n";
    echo "5- Excluir Clientes\n";
    echo "0- Sair\n";
    
    $opcao = readline("Informe a opção: \n");
    switch ($opcao) {
    
        case 1:

            //cria objeto a ser persistido

            $cli = new ClientePF();
            $cli->setNome(readline("Informe seu nome: "));
            $cli->setNomeSocial(readline("Informe o seu nome social: "));
            $cli->setCpf(readline("Informe seu CPF: "));
            $cli->setEmail(readline("Informe seu E-mail: \n"));

            //chamar método DAO para persistir objeto

            $clienteDAO = new ClienteDAO();
            $clienteDAO->inserirCliente($cli);

            echo "Cliente PF cadastrado com sucesso!\n\n";

            // print_r($cli);

            break;
    
        case 2:

            //criar objeto a ser persistido

            $cliPJ = new ClientePJ();

            $cliPJ->setNomeSocial(readline("Informe o Nome Social: "));
            $cliPJ->setRazaoSocial(readline("Informe a Razão Social: "));
            $cliPJ->setCnpj(readline("Informe o CPNJ: "));
            $cliPJ->setEmail(readline("Informe o E-mail: "));

            $clienteDAO = new ClienteDAO();
            $clienteDAO->inserirCliente($cli);

            echo "Cliente PJ cadastrado com sucesso!\n\n";

            // $cliPJ->
            break;
    
        case 3:

            $clienteDAO = new ClienteDAO();
            $clientes = $clienteDAO->listarClientes();

            //exibir dadosssssssssssssssssssss

            foreach($clientes as $c) {

                printf("%d- %s | %s | %s | %s\n",
                $c->getId(), $c->getTipo(), $c->getNomeSocial(), $C->getIdentificacao(), $c->getNroDoc(), $c->getEmail());

            }

            break;
    
        case 4:

            /*
            
            passo a passo buscar cliente pelo id

            ler o id r

            chamar o metodo retorna objeto cliente bancodedados

            pseudocodigo $clienteDAO = new ClienteDAO();
                        $cliente = $clienteDAO->buscarÍd($id)

            verificar se o cliente retornar é diferente de null
            se for diferente de null mostrar os dados do cliente
            se for igual a null mostrar mensagem cliente nao foi encontrado
            
            */

            $id = readline("Informe o ID do cliente: ");

            $clienteDAO = new ClienteDAO();
            $cliente = $clienteDAO->buscarPorId($idClientes);

            if($cliente) {

                echo $cliente; //Chama o método toString()

            } else {

                echo "Cliente com ID " . $id . " não econtrado!\n";

            }

            break;
    
        case 5:
            break;
    
        case 0:
            break;
    
    }
    
} while ($opcao != 0);

