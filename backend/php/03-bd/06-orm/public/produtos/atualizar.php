<?php

require_once(__DIR__ . '/../template-html.php');

require_once(__DIR__ . '/../../db/Db.php');
require_once(__DIR__ . '/../../model/Produto.php');
require_once(__DIR__ . '/../../dao/DaoProduto.php');
require_once(__DIR__ . '/../../config/config.php');

$conn = new Db(Config::db_host, Config::db_user, Config::db_password, Config::db_database);

if (! $conn->connect()) {
    die();
}

$daoProduto = new DaoProduto($conn);
$produto = $daoProduto->porId( $_POST['id'] );
    
if ( $produto )
{  
  $produto->setNome( $_POST['nome'] );
  $daoProduto->atualizar( $produto );
}

header('Location: ./index.php');