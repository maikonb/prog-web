<?php
    session_start();

    class MinhaClasse {
        
        private $atributo1;
        private $atributo2;

        public function __construct($atr1, $atr2) {
            $this->atributo1 = $atr1;
            $this->atributo2 = $atr2;
        }
        
        public function imprimirAtributos() {
            echo "<p>";
            echo "Atributo1: " . $this->atributo1 . "; ";
            echo "Atributo2: " . $this->atributo2 . "; ";
            echo "</p>";
        }

        public function __sleep() {
            return array_keys( get_object_vars($this) );
        }

        public function __wakeup() {
        }
        
        public function imprimir() {
            $atributos = get_object_vars($this);
            var_dump($atributos);
            var_dump( array_keys( $atributos ) );
        }
    };
    
    $c = 0;
    if (isset($_SESSION["objetos"]))
        $c = count($_SESSION["objetos"]); 

    $objeto = new MinhaClasse($c+1,$c+2);

    $_SESSION["objetos"][] = $objeto;
    foreach($_SESSION["objetos"] as $i=>$o) {
        echo "<p>Objeto $i </p>"; 
        $o->imprimirAtributos();
    }
    
    $c = count($_SESSION["objetos"]); 
    echo "<p><h2> Total de objetos: $c </h2><p>";
    // Apago a Sessao quando completar 10
    if ($c >= 10)
        session_destroy();

?>