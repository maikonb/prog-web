<?php
    class PessoaFisica {
        protected $id;
        protected $nome;
        protected $endereco;
        protected $telefone;

        public function __construct($id, $nome, 
            $endereco, $telefone) 
        {
            $this->id        = $id;
            $this->nome      = $nome;
            $this->endereco  = $endereco;
            $this->telefone  = $telefone;
        }
    
        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function getNome() {
            return $this->nome;
        }
        public function setId($id) {
            $this->id = $id;
        }
        public function getId() {
            return $this->id;
        }
        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }
        public function getEndereco() {
            return $this->endereco;
        }
        public function setTelefone($tel) {
            $this->telefone = $tel;
        }
        public function getTelefone() { 
            return $this->telefone;
        }

    }
