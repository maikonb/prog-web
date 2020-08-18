<?php
    class Exemplo {
        private $atributo;
        public  $atributo_publico;
        
        public function __construct() {
            echo "<h1> Ola mundo. </h1>";
            $this->atributo_publico = "Inicializando";
        }

        public function __destruct() {
            echo "<h1> Thau mundo. </h1>";
        }

        public function setAtributo($atr) {
            if (isset($atr))
                $this->atributo = $atr;
        }
        public function getAtributo() {
            if (isset($this->atributo))
                return $this->atributo;
        }
    };

echo "<html>\n";
echo "<head> <title> Teste de classe </title> </head>\n";
echo "<body>\n";

$p = new Exemplo(); 
$p->setAtributo("Atributo privado OK");
$a = $p->getAtributo();
$b = $p->atributo_publico;

echo "<p><h4>O conteudo do atributo privado eh: $a </p></h4>\n";
echo "<p><h4>O conteudo do atributo publico eh: $b </p></h4>\n";
echo "</body>\n";
echo "</html>\n";

?>

