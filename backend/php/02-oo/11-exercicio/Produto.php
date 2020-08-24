<?php

    class Produto {
        
        private $idProduto;
        private $nome;
        private $preco;
        private $departamento;

        public function __construct($idProduto, $nome, 
                                    $preco, $departamento) 
        {
            $this->idProduto = $idProduto;
            $this->nome = $nome;
            $this->preco = $preco;
            $this->departamento = $departamento;
        }
        
        public function setIdProduto($idProduto) {
            $this->idProduto = $idProduto;
        }

        public function getIdProduto() {
            return $this->idProduto;
        }
        
        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }
        
        public function setPreco($preco) {
            $this->preco = $preco;
        }

        public function getPreco() {
            return $this->preco;
        }

        public function setDepartamento($departamento) {
            $this->departamento = $departamento;
        }
        
        public function getDepartamento() {
            return $this->departamento;
        }


    };

