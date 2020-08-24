<?php
    // Metodos Mágicos __set e __get

    class AlunoProgramacao  {
        private $notas;
        
        public function __construct() {
            $notas = array();
        }

        public function __set($nome, $value) {
            if (isset($nome) && isset($value)) {
                $this->notas[$nome] = $value;
            }
        }
        public function __get($nome) {
            if (isset($nome)) {
                return $this->notas[$nome];
            }
        }
        
    };
?>
<html>
<head> <title> Teste de __get e __set </title></head>
<body>

<?php
    $a = new AlunoProgramacao();
    $a->java  = 5.0; 
    $a->cobol = 9.5;
    echo "notas: ". $a->java . " e " . $a->cobol;
?>

</body>
