<?php

class Pedido {

    private string $nomeCliente;
    private string $nomeGarcom;
    private Prato $prato;

    public function __toString() {
        
        $pedidos = sprintf("O cliente  %s, foi atendido pelo(a) garçom (garçonete) %s, pediu um prato de %s no valor de R$ ");

    }

    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function setNomeCliente(string $nomeCliente): self
    {
        $this->nomeCliente = $nomeCliente;

        return $this;
    }

    public function getNomeGarcom(): string
    {
        return $this->nomeGarcom;
    }

    public function setNomeGarcom(string $nomeGarcom): self
    {
        $this->nomeGarcom = $nomeGarcom;

        return $this;
    }
    
    public function getPrato(): Prato
    {
        return $this->prato;
    }

    public function setPrato(Prato $prato): self
    {
        $this->prato = $prato;

        return $this;
    }
}