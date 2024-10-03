<?php

    class Receita {

        private string $descricao;
        private float $valor;

        public function getDescricao(): string{
            return $this->descricao;
        }

        public function setDescricao(string $descricao): self{
            $this->descricao = $descricao;

            return $this;
        }

        public function getValor(): float{
            return $this->valor;
        }

        public function setValor(float $valor): self{
            $this->valor = $valor;

            return $this;
        }
    }

    class Despesa {

        private string $descricao;
        private float $valor;
        
        public function getDescricao(): string{
            return $this->descricao;
        }

        public function setDescricao(string $descricao): self{
            $this->descricao = $descricao;

            return $this;
        }

        public function getValor(): float{
            return $this->valor;
        }

        public function setValor(float $valor): self{
            $this->valor = $valor;

            return $this;
        }

    }

    $opcao = 0;
    $receitas = array();
    $despesas = array();

    do {

        echo "\n-----------MENU-----------\n";
        echo "OPÇÃO 1. Adicionar Receita.\n";
        echo "OPÇÃO 2. Adicionar Despesa.\n";
        echo "OPÇÃO 3. Listar Receitas Cadastradas.\n";
        echo "OPÇÃO 4. Listar Despesas Cadastradas.\n";
        echo "OPÇÃO 5. Sumarizar.\n";
        echo "OPÇÃO 6. Sair do Programa.\n";
        $opcao = readline("Escolha uma das opcões acima: ");

        switch($opcao) {
            default:
                echo "O caracter que você digitou não existe no programa. Digite um caracter válido. \n";
                break;

                case 1:
                    echo "\n";
                    $receita = new Receita();
                    $receita->setDescricao(readline("Como você adquiriu essa receita? "))->setValor(readline("Informe o valor exato dessa receita: "));
                    array_push($receitas, $receita);
                    break;

                case 2:
                    echo "\n";
                    $despesa = new Despesa();
                    $despesa->setDescricao(readline("Como você gerou essa despesa? "))->setValor(readline("Informe o valor exato gasto nessa despesa: "));
                    array_push($despesas, $despesa);
                    break;

                case 3:
                    echo "A seguir estão as receitas cadastradas na lista: \n";
               
                    print_r($receita);
                    break;

                case 4:
                    echo "A seguir estão as despesas cadastradas na lista: \n";
                    print_r($despesa);
                    break;

                case 5:

                case 6:
                    echo "Você saiu do Programa.\n";
                    break;


        }

    } while($opcao != 0);