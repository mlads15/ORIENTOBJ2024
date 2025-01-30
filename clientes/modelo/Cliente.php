<?php

abstract class Cliente {

    //atributos

    protected int $id;
    protected string $nomeSocial;
    protected string $email;

    //metodos

    public abstract function getIdentificacao();
    public abstract function getNroDoc();
    public abstract function getTipo();

    public function __toString() {
        return sprintf("%d- %s | %s | %s | %s | %s\n",
                        $this->id, $this->getTipo(), $this->nomeSocial,
                        $this->getIdentificacao(), $this->getNroDoc(),
                        $this->email);
        
    }

    //gets e sets

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): self {
        $this->id = $id;

        return $this;
    }

    public function getNomeSocial(): string {
        return $this->nomeSocial;
    }

    public function setNomeSocial(string $nomeSocial): self {
        $this->nomeSocial = $nomeSocial;

        return $this;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): self {
        $this->email = $email;

        return $this;
    }
}