<?php 
require_once('../model/Produto.php');
require_once('../db/Db.php');

// Classe para persistencia de Produtos 
// DAO - Data Access Object
class DaoProduto {
    
  private $connection;

  public function __construct(Db $connection) {
      $this->connection = $connection;
  }
  
  public function porId(int $id): ?Produto {
    $sql = "SELECT nome FROM produtos where id = ?";
    $stmt = $this->connection->prepare($sql);
    $dep = null;
    if ($stmt) {
      $stmt->bind_param('i',$id);
      if ($stmt->execute()) {
        $nome = '';
        $stmt->bind_result($nome);
        $stmt->store_result();
        if ($stmt->num_rows == 1 && $stmt->fetch()) {
          $dep = new Produto($nome, $id);
        }
      }
      $stmt->close();
    }
    return $dep;
  }

  public function inserir(Produto $produto): bool {
    $sql = "INSERT INTO produtos (nome) VALUES(?)";
    $stmt = $this->connection->prepare($sql);
    $res = false;
    if ($stmt) {
      $nome = $produto->getNome();
      $stmt->bind_param('s', $nome);
      if ($stmt->execute()) {
          $id = $this->connection->getLastID();
          $produto->setId($id);
          $res = true;
      }
      $stmt->close();
    }
    return $res;
  }

  public function remover(Produto $produto): bool {
    $sql = "DELETE FROM produtos where id=?";
    $id = $produto->getId(); 
    $stmt = $this->connection->prepare($sql);
    $ret = false;
    if ($stmt) {
      $stmt->bind_param('i',$id);
      $ret = $stmt->execute();
      $stmt->close();
    }
    return $ret;
  }

  public function atualizar(Produto $produto): bool {
    $sql = "UPDATE produtos SET nome = ? WHERE id = ?";
    $stmt = $this->connection->prepare($sql);
    $ret = false;      
    if ($stmt) {
      $nome = $produto->getNome();
      $id   = $produto->getId();
      $stmt->bind_param('si', $nome, $id);
      $ret = $stmt->execute();
      $stmt->close();
    }
    return $ret;
  }

  
  public function todos(): array {
    $sql = "SELECT id, nome from produtos";
    $stmt = $this->connection->prepare($sql);
    $produtos = [];
    if ($stmt) {
      if ($stmt->execute()) {
        $id = 0; $nome = '';
        $stmt->bind_result($id, $nome);
        $stmt->store_result();
        while($stmt->fetch()) {
          $produtos[] = new Produto($nome, $id);
        }
      }
      $stmt->close();
    }
    return $produtos;
  }

};

