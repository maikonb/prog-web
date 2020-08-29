<?php 

class Marca {

  private $id;
  private $nome;

  public function __construct(int $id=-1, string $nome='') {
      $this->id = $id;
      $this->nome = $nome;
  }

  public function setId(int $id) {
      $this->id = $id;
  }

  public function getId() {
      return $this->id;
  }

  public function setNome($nome) {
      $this->nome = $nome;
  }

  public function getNome() {
      return $this->nome;
  }
  
};