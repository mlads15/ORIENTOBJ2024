<?php

class Posto {

    private $litroGasolina;
    private $abastGasolina;

    public function abastecer() {

    }

    public function getLitroGasolina(){
        return $this->litroGasolina;
    }

    public function setLitroGasolina($litroGasolina): self{
        $this->litroGasolina = $litroGasolina;

        return $this;
    }

    public function getAbastGasolina(){
        return $this->abastGasolina;
    }

    public function setAbastGasolina($abastGasolina): self
    {
        $this->abastGasolina = $abastGasolina;

        return $this;
    }
}
