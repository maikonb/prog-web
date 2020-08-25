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

function somar(MeuTipo $obj, $valor) {
    $obj->somar($valor);
}

$s = new MeuTipoString("Ola");
somar($s, " Mundo");
somar($s, "!!");
$s->imprimir();

$n = new MeuTipoInteiro(100);
somar($n, 100);
somar($n, 100);
$n->imprimir();

?>