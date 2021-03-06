<?php

require_once(__DIR__ . '/../../db/Db.php');
require_once(__DIR__ . '/../../model/Departamento.php');
require_once(__DIR__ . '/../../dao/DaoDepartamento.php');
require_once(__DIR__ . '/../../config/config.php');

$conn = new Db(Config::db_host, Config::db_user, Config::db_password, Config::db_database);

if (! $conn->connect()) {
    die();
}

$daoDepartamento = new DaoDepartamento($conn);
$daoDepartamento->inserir( new Departamento($_POST['nome']));
    
header('Location: ./index.php');

?>


