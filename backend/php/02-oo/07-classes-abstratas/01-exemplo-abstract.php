<?php
    abstract class Veiculo {
        protected $marca;
        protected $modelo;

        abstract protected function getTipo();

        public function printTipo() {
            echo $this->getTipo();
        }
    }

    class Carro extends Veiculo {
        protected function getTipo() {
            return "<p> Automovel </p>";
        }
    }

    class Bicicleta extends Veiculo {
        protected function getTipo() {
            return "<p> Bicicleta </p>";
        }
    }
    
    $c = new Carro;
    $c->printTipo();
    $c = new Bicicleta;
    $c->printTipo();
    // v = new Veiculo(); // Erro, classe abstrata nao pode ser instanciada
?>
