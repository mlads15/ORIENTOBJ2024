<?php

class Carta {

    private $nome = [];
    private int $numero;
    private $naipes = ["Copas", "Espadas", "Ouros", "Paus"];

    public function getNome(){

        return $this->nome;

    }

    public function getNumero(){

        return $this->numero;

    }

    public function getNaipes(){

        return $this->naipes;

    }

    public function __construct(){

        $this->geraCartas();

    }

    private function geraCartas(){

        for ($numero = 1; $numero <= 14; $numero++) {

            foreach ($this->naipes as $naipes) {

                $this->nome[] = $this->formataCarta($numero, $naipes);
            }
        }
    }

    private function formataCarta($numero, $naipes) {

        switch ($numero) {

            case 1:

                return "Ás de $naipes";

            case 11:

                return "Valete de $naipes";

            case 12:

                return "Rainha de $naipes";

            case 13:

                return "Rei de $naipes";

            case 14:

                return "Coringa de $naipes";

            default:

                return "$numero de $naipes";
        }
    }

    public function sorteiaCarta() {

        return array_rand(array_flip($this->nome));

    }

    public function listaCartas() {

        return $this->nome;

    }
}

$nome = new Carta();
$cartaSecreta = $nome->sorteiaCarta();

echo "\nBom dia, caro(a) cidadão(ã) de Tóquio. Seja bem-vindo(a) ao Jogo de Adivinhação de Cartas!\n";

echo "\nHoje, a manhã parece perfeita para um desafio diferente que cada um de vocês terá de enfrentrar! Você está no mundo de Alice in Borderland, e o seu primeiro objetivo é simples: Adivinhe a carta que define a dificuldade do próximo jogo que vocês enfrentam em seguida. Boa sorte!\n\n";

echo "Aqui estão as cartas disponíveis: \n";

foreach ($nome->listaCartas() as $c) {

    echo "- $c \n";

}

$tentativas = 0;
$maxTentativas = 5;
$ferimentos = 0;

while ($tentativas < $maxTentativas) {

    echo "\nDigite sua tentativa: ";

    $tentativa = trim(fgets(STDIN));

    /*usei o comando trim(fgets(STDIN)), que ja havia usado em um trabalho antes pra capturar a entrada do usuario do terminal, ler a linha e tambem remover os espaços em branco e quebras de linha da entrada :c*/

    if ($tentativa === $cartaSecreta) {

        echo "\nParabéns! Você adivinhou a carta correta: " . $cartaSecreta . "!\n";
        break;
    } else {

        $ferimentos++;
        $tentativas++;

        echo "\nPoxa, você perdeu... Aqui vai um machucadinho, para que você preste mais atenção na próxima tentativa!\n";
        echo "Ah! Você sofreu " . $ferimentos . " ferimentos até agora.\n";
    }

    if ($tentativas >= $maxTentativas) {

        echo "\nOh, não! Você esgotou todas suas tentativas, isso equivale à uma penalização ainda maior. A carta secreta era: " . $cartaSecreta . ".\n Foi bom te conhecer, caro(a) jogador(a).";

        $ferimentos = $ferimentos + 20;

        echo "Com um total de " . $ferimentos . " ferimentos, este(a) jogador(a) será aniquilado e, consequentemente, retirado do jogo. Que peninha!\n";
    }
}
