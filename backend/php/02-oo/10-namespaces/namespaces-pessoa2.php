<?php
    namespace PessoaJuridica;

    class Pessoa {

        private $nome;
        private $endereco;
        
        public function __construct($nome, $endereco) {
            $this->nome = $nome;
            $this->endereco = $endereco;
        }

        public function __destruct() {
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }
        public function getNome() {
            return $this->nome;
        }
        public function getEndereco() {
            return $this->endereco;
        }
        public function imprimir() {
            echo "<br>\n";
            echo "<h3>Sou pessoa JURIDICA</h3>\n";
            echo "<p>Nome: " . $this->nome  . "</p>\n";
            echo "<p>Endereco: " . $this->endereco . "</p>\n";
            echo "<br>\n";
        }
    }
    
?>
