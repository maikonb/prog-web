<?php

    require_once('Cliente.php');
    require_once('Vendedor.php');

    class Venda {
        protected $idVenda;
        protected $total;
        protected $cliente;
        protected $produtos;
        protected $vendedor;

        public function __construct($idVenda, $cliente, 
                                    $total, $produtos, 
                                    $vendedor) 
        {
            $this->idVenda  = $idVenda;
            $this->cliente  = $cliente;
            $this->total    = $total;
            $this->produtos = $produtos;
            $this->vendedor = $vendedor;
        }

        public function addProduto($produto) {
            $this->produtos[] = $produto;
        }

        public function setIdVenda($idVenda) {
            $this->idVenda = $idVenda;
        }

        public function setCliente(Cliente $cliente) {
            $this->cliente = $cliente;
        }

        public function setTotal($total) {
            $this->total = $total;
        }

        public function setProdutos($produtos) {
            $this->produtos = $produtos;
        }


        public function getIdVenda() {
            return $this->idVenda;
        }

        public function getCliente() {
            return $this->cliente;
        }

        public function getTotal() {
            return $this->total;
        }

        public function getProdutos() {
            return $this->produtos;
        }

        public function setVendedor(Vendedor $vendedor) {
            $this->vendedor = $vendedor;
        }

        public function getVendedor() {
            return $this->vendedor;
        }
        
        public function calculaTotal() {
        }

    };
