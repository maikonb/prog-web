<?php

$host   = "127.0.0.1";
$user   = "user";
$passwd = "user";
$db     = "vendas";

$mysqli = new mysqli($host, $user, $passwd, $db);

if (!$mysqli->connect_errno) {
  echo "<p>Conectado ao banco de dados!!!</p>\n";
}
else
  echo "<p>Nao conectado ao banco de dados. Erro na conexão.</p>\n";