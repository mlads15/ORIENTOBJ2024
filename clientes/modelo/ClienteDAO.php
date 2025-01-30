<?php

require_once("modelo/Cliente.php");
require_once("modelo/ClientePJ.php");
require_once("modelo/ClientePF.php");

require_once("util/Conexao.php");

class ClienteDAO {

    public function inserirCliente(Cliente $cliente) {

        $sql = "INSERT INTO clientes
        (tipo, nome_social, email, nome, cpf, razao_social, cnpj)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

        $con = Conexao::getCon();

        $stm = $con->prepare($sql);
        if($cliente instanceof ClientePF) {

        $stm->execute(array($cliente->getTipo(), 
                            $cliente->getNomeSocial(),
                            $cliente->getEmail(),
                            $cliente->getNome(),
                            $cliente->getCpf(),
                            null,
                            null));

        }

        $stm = $con->prepare($sql);
        if($cliente instanceof ClientePJ) {

        $stm->execute(array($cliente->getTipo(), 
                            $cliente->getNomeSocial(),
                            $cliente->getEmail(),
                            $cliente->getRazaoSocial(),
                            $cliente->getCnpj(),
                            null,
                            null));

        }


    }

    public function listarClientes() {

        $sql = "SELECT * FROM clientes";

        $con = Conexao::getCon();

        $stm = $con->prepare($sql);
        $stm->execute();
        $registros = $stm->fetchAll();

        $clientes = $this->mapClientes($registros);

        return $clientes;

    }

    private function buscarPorId(int $idClientes) {

        $con = Conexao::getCon();

        $sql = "SELECT * FROM clientes WHERE id = ?";

        $stm = $con->prepare($sql);
        $stm->execute([$idClientes]);

        $registros = $stm->fetchAll();

        $clientes = $this->mapClientes($registros);

        if(count($clientes) == 1)
            return $clientes[0];
        
        return null;


    }

    private function mapClientes(array $registros) {

        $clientes = array();
        foreach($registros as $reg) {

            $cliente = null;
            if($reg['tipo'] == "F") {

                $cliente = new ClientePF();
                $cliente->setNome($reg['nome']);
                $cliente->setCpf($reg['cpf']);

            } else {

                $cliente = new ClientePJ();
                $cliente->setRazaoSocial($reg['razaoSocial']);
                $cliente->setCnpj($reg['cnpj']);

            }

            $cliente->setId($reg["id"]);
            $cliente->setNomeSocial($reg["nomeSocial"]);
            $cliente->setEmail($reg["email"]);

            array_push($clientes, $cliente);

        }

        return $clientes;
    }

}

