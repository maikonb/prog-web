<?php

require_once(__DIR__ . '/../../templates/template-html.php');

require_once(__DIR__ . '/../../db/Db.php');
require_once(__DIR__ . '/../../model/Marca.php');
require_once(__DIR__ . '/../../dao/DaoMarca.php');
require_once(__DIR__ . '/../../config/config.php');

$conn = new Db(Config::db_host, Config::db_user, Config::db_password, Config::db_database);

if (! $conn->connect()) {
    die();
}

$daoMarca = new DaoMarca($conn);
$marca = $daoMarca->porId( $_POST['id'] );
    
if ( $marca )
{  
  $marca->setNome( $_POST['nome'] );
  $daoMarca->atualizar( $marca );
}

header('Location: ./index.php');