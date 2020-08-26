<?php

class VendaProduto {

    protected $produto;
    protected $quantidade;
    protected $desconto;

    public function __construct($prod, $quant, $desc)
    {
        $this->produto = $prod;
        $this->quantidade = $quant;
        $this->desconto = $desc;
    }

    public function setProduto($prod) {
        $this->produto = $prod;
    }

    public function getProduto() {
        return $this->produto;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setDesconto($desc) {
        $this->desconto = $desc;
    }

    public function getDesconto() {
        return $this->desconto;
    }


}
