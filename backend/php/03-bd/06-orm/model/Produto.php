<?php 

require_once('../model/marca.php');
require_once('../model/Marca.php');

class Produto {
    
  private $id;
  private $nome;
  private $preco;
  private $estoque;
  private $marca;
  private $departamentos = [];

  public function __construct(int $id=-1, string $nome="", float $preco=0.0, Marca $marca=null) {
      $this->id = $id;
      $this->nome = $nome;
      $this->preco = $preco;
      $this->marca = $marca;
      $this->departamentos = [];
  }
  
  public function setId($id) {
      $this->id = $id;
  }

  public function getId() {
      return $this->id;
  }
  
  public function setNome(string $nome) {
      $this->nome = $nome;
  }

  public function getNome() {
      return $this->nome;
  }
  
  public function setPreco(float $preco) {
      $this->preco = $preco;
  }

  public function getPreco() {
      return $this->preco;
  }

  public function setMarca(Marca $marca) {
      $this->marca = $marca;
  }
  
  public function getMarca() {
      return $this->marca;
  }

  public function setEstoque(int $estoque) {
    $this->estoque = $estoque;
  }

  public function getEstoque() {
    return $this->estoque;
  }

  public function setDepartamentos(array $departamentos) {
    $this->departamentos = $departamentos;
  }

  public function getDepartamentos() {
    return $this->departamentos;
  }
};


