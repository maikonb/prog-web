<?php

class Cliente {

    private $id;
    private $nome;
    private $idade;
    private $cidade;

    // Metodos representam os comportamentos exercidos pelos objetos

    function setId($id) {
        $this->id = $id;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
    function setIdade($idade) {
        $this->idade = $idade;
    }
    function setCidade($cidade) {
        $this->cidade = $cidade;
    }
    function getId() {
        return $this->id;
    }
    function getNome() {
        return $this->nome;
    }
    function getIdade() {
        return $this->idade;
    }
    function getCidade() {
        return $this->cidade;
    }
    function getHtml() {
        return "<ul>" . 
            "<li>id: $this->id </li>" .
            "<li>nome: $this->nome </li>" .
            "<li>idade: $this->idade </li>" .
            "<li>cidade: $this->cidade </li>" .
            "</ul>";
    }
};

/*
// Erro ao acessar atributos privados 

$c1 = new Cliente(); 
$c1->id     = 1;
$c1->nome   = "Orlando Ferreira";
$c1->idade  = 42;
$c1->cidade = "Florianopolis";
*/

$c1 = new Cliente(); 
$c1->setId(1);
$c1->setNome("Orlando Ferreira");
$c1->setIdade(42);
$c1->setCidade("Florianopolis");

$c2 = new Cliente(); 
$c2->setId(1);
$c2->setNome("Maite Silva");
$c2->setIdade(38);
$c2->setCidade("Sao Paulo");

var_dump($c1); 
echo "<br>";
var_dump($c2);
echo "<br>";

echo $c1->getHtml();
echo $c2->getHtml();

?>

