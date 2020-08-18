<?php

// Representação da estrutura do Cliente
// Mapeia os comportamentos e estados do Cliente
class Cliente {
    public $id;
    public $nome;
    public $idade;
    public $cidade;
    // Atributos representam o estado do objeto
};

$c1 = new Cliente(); 
$c1->id     = 1;
$c1->nome   = "Orlando Ferreira";
$c1->idade  = 42;
$c1->cidade = "Florianopolis";

$c2 = new Cliente(); 
$c2->id     = 1;
$c2->nome   = "Maite Silva";
$c2->idade  = 38;
$c2->cidade = "Sao Paulo";

var_dump($c1); 
echo "<br>";
var_dump($c2);
echo "<br>";

?>

