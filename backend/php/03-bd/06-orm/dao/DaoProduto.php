<?php 
require_once(__DIR__ . '/../model/Produto.php');
require_once(__DIR__ . '/../model/Marca.php');
require_once(__DIR__ . '/../db/Db.php');

// Classe para persistencia de Produtos 
// DAO - Data Access Object
class DaoProduto {
    
  private $connection;

  public function __construct(Db $connection) {
      $this->connection = $connection;
  }
  
  public function porId(int $id): ?Produto {
    $sql = "SELECT produtos.nome, produtos.preco, 
                   produtos.estoque, produtos.marca_id, marcas.nome 
            FROM produtos 
            LEFT JOIN marcas ON marcas.id = produtos.marca_id
            WHERE produtos.id = ?";
    $stmt = $this->connection->prepare($sql);
    $prod = null;
    if ($stmt) {
      $stmt->bind_param('i',$id);
      if ($stmt->execute()) {
        $stmt->bind_result($nome,$preco,$estoque,$marca_id,$marca_nome);
        $stmt->store_result();
        if ($stmt->num_rows == 1 && $stmt->fetch()) {
          $prod = new Produto($nome, $preco, $estoque, 
            new Marca($marca_nome, $marca_id), $id);
        }
      }
      $stmt->close();
    }
    return $prod;
  }

  public function inserir(Produto $produto): bool {
    $sql = "INSERT INTO produtos (nome,preco,estoque,marca_id) VALUES(?,?,?,?)";
    $stmt = $this->connection->prepare($sql);
    $res = false;
    if ($stmt) {
      $nome = $produto->getNome();
      $preco = $produto->getPreco();
      $estoque = $produto->getEstoque();
      $marca_id = $produto->getMarca()->getId();
      $stmt->bind_param('sdii', $nome, $preco, $estoque, $marca_id);
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
    $sql = "UPDATE produtos SET nome=?, preco=?, estoque=?, marca_id=? WHERE id = ?";
    $stmt = $this->connection->prepare($sql);
    $ret = false;      
    if ($stmt) {
      $nome = $produto->getNome();
      $preco = $produto->getPreco();
      $estoque = $produto->getEstoque();
      $marca_id = $produto->getMarca()->getId();      
      $id   = $produto->getId();
      $stmt->bind_param('sdiii', $nome, $preco, $estoque, $marca_id, $id);
      $ret = $stmt->execute();
      $stmt->close();
    }
    return $ret;
  }

  
  public function todos(): array {
    $sql = "SELECT produtos.id, produtos.nome, produtos.preco, 
                   produtos.estoque, produtos.marca_id, marcas.nome 
            FROM produtos 
            LEFT JOIN marcas ON marcas.id = produtos.marca_id";
    $stmt = $this->connection->prepare($sql);
    $produtos = [];
    if ($stmt) {
      if ($stmt->execute()) {
        $id = 0; $nome = '';
        $stmt->bind_result(
          $id, $nome, $preco, $estoque, $marca_id, $marca_nome
        );
        $stmt->store_result();
        while($stmt->fetch()) {
          // TODO: Criar uma unica instancia para cada marca
          //       de modo a otimizar a memoria.
          // Adotei a abordagem abaixo por ser mais rapido, 
          // mas nao eh eficiente          
          $marca = new Marca($marca_nome, $marca_id);
          $produtos[] = new Produto($nome, $preco, $estoque, $marca, $id);
        }
      }
      $stmt->close();
    }
    return $produtos;
  }

};

