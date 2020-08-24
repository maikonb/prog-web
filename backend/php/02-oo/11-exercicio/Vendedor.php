<?php
    require_once("PessoaFisica.php");

    class Vendedor extends PessoaFisica {
        private $salario;

        public function __construct($id, $nome, $end, $tel, $salario) {
            parent::__construct($id, $nome, $end, $tel);
            $this->salario = $salario;
        }
        public function setSalario($salario) {
            $this->salario = $salario;
        }
        public function getSalario() {
            return $this->salario;
        }
    }

