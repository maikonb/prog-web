<?php

    class MinhaClasseBase {
        
        // Atributos privados sao acessiveis sempre: atraves dos objetos
        // como também das sub-classes
        public $atributo1;
        
        // Atributos protegidos sao acessiveis somente pelas sub-classes
        protected $atributo2;

        // Atributos privados sao somente acessiveis na classe em que
        // foram declarados. Eh o nivel mais alto de protecao de atributos
        private $atributo3;
        
        function __construct($at1, $at2, $at3) {
            $this->atributo1 = $at1;
            $this->atributo2 = $at2;
            $this->atributo3 = $at3;
        }
        
        function imprimir() {
            echo "($this->atributo1, $this->atributo2, $this->atributo3)<br>";
        }
    }

    class MinhaSubClasse extends MinhaClasseBase {
        
        function __construct($at1, $at2, $at3) {
            parent::__construct($at1, $at2, $at3);
        }

        function imprimir() {
            echo "($this->atributo1, $this->atributo2)<br>";
            // Como eu faria para imprimir o atributo3 aqui?
        }
    }
    
    $o1 = new MinhaClasseBase(1,2,3);
    $o1->atributo1 = 4; // Atributo publico, acesso permito atraves do objeto
    // $o1->atributo2 = 4; // Erro: nao posso acessar atributos protegidos
    // $o1->atributo3 = 4; // Erro: nao posso acessar atributos privados 
    $o1->imprimir();
    
    $o2 = new MinhaSubClasse(1,2,3);
    $o1->atributo1 = 4; // Atributo publico, acesso permito atraves do objeto
    $o2->imprimir();

?>
