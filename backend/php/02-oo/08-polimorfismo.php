<?php

abstract class MeuTipo {
    protected $valor;
    function __construct($valor) {
        $this->valor = $valor;
    }
    
    abstract function somar($v);
    abstract function imprimir();

}

class MeuTipoString extends MeuTipo {
    function __construct($valor) {
        parent::__construct($valor);
    }
    function somar($v) {
        if (is_string($v))
            $this->valor .= $v; // $this->valor = $this->valor . $v;
    }
    function imprimir() {
        printf("<p>Minha string: %s</p>", $this->valor);
    }
}

class MeuTipoInteiro extends MeuTipo {
    function __construct($valor) {
        parent::__construct($valor);
    }
    function somar($v) {
        if (is_int($v))
            $this->valor += $v; 
    }
    function imprimir() {
        printf("<p>Meu inteiro: %d</p>", $this->valor);
    }
}

//$m = new MeuTipo(12);

$s = new MeuTipoString("Ola");
$s->somar(" Mundo");
$s->somar("!!");
$s->imprimir();

$n = new MeuTipoInteiro(100);
$n->somar(100);
$n->somar(100);
$n->imprimir();

?>