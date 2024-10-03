<?php

class Robo {
    private string $nome;
    private string $tipo;
    private int $qtdSensores;

    //construtor
    public function __construct($n = "", $t = "", $qtd = 0){
        $this->nome = $n;
        $this->tipo = $t;
        $this->qtdSensores = $qtd;
    }

    public function getTipo(): string{
        return $this->tipo;
    }

    public function setTipo(string $tipo): self{
        $this->tipo = $tipo;

        return $this;
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function setNome(string $nome): self{
        $this->nome = $nome;

        return $this;
    }

    public function getQtdSensores(): int{
        return $this->qtdSensores;
    }

    public function setQtdSensores(int $qtdSensores): self{
        $this->qtdSensores = $qtdSensores;

        return $this;
    }
}

$robo1 = new Robo();
$robo1->setNome("Strawberry Shortcake")
        ->setTipo("Arduíno")->setQtdSensores(5);

$robo2 = new Robo();
$robo2->setNome("Barbie")
        ->setTipo("Arduíno")->setQtdSensores(10);

$robo3 = new Robo();
$robo3->setNome("Polly Pocket")
        ->setTipo("Arduíno")->setQtdSensores(6);

$robos = array($robo1, $robo2);
echo $robos[1]->getNome() . "\n";

array_push($robos, $robo3);
echo $robos[2]->getTipo() . "\n";
echo $robos[2];

//laço for
/*for ($i = 0; $i < count($robos); $i++) { 
    echo $robos[$i]->getNome() . "\n";
}*/

array_push($robos, new Robo("Strawberry Shortcake", "Arduíno", 3));

//laço foreach
foreach ($robos as $r) {
    echo $r->getNome() . "\n";
}

$algumRobo = $robos[3];
echo $algumRobo->getTipo() . "\n";
//echo $robos[3]->getTipo() . "\n";

