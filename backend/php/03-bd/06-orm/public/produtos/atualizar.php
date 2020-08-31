<?php

require_once(__DIR__ . '/../template-html.php');

require_once(__DIR__ . '/../../db/Db.php');
require_once(__DIR__ . '/../../model/Produto.php');
require_once(__DIR__ . '/../../dao/DaoProduto.php');
require_once(__DIR__ . '/../../dao/DaoMarca.php');
require_once(__DIR__ . '/../../config/config.php');

$conn = new Db(Config::db_host, Config::db_user, Config::db_password, Config::db_database);

if (! $conn->connect()) {
    die();
}
$daoMarca = new DaoMarca($conn);
$marca = $daoMarca->porId( $_POST['marca'] );

$daoProduto = new DaoProduto($conn);
$produto = $daoProduto->porId( $_POST['id'] );
    
if ( $produto )
{  
  $produto->setNome( $_POST['nome'] );
  $produto->setPreco( $_POST['preco'] );
  $produto->setEstoque( $_POST['estoque'] );
  $produto->setMarca( $marca );
  $daoProduto->atualizar( $produto );

  $daoProduto->sincronizarDepartamentos( $produto, $_POST['departamentos'] );
}

header('Location: ./index.php');