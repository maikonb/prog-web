<?php

require_once('01-conexao-bd.php');

if ($conectado) {

  // Modo 1
  $sql = "INSERT INTO marcas (nome) VALUES (\"Sony\")";
  if ($mysqli->query($sql))
    echo "<p>Registro inserido.</p>\n";

  $sql = "INSERT INTO marcas (nome) VALUES (\"LG\")";
  if ($mysqli->query($sql))
    echo "<p>Registro inserido.</p>\n";
  else
    echo "<p>Falha ao inserir registro.</p>\n";

  // Modo 2
  $sql = "INSERT INTO marcas (nome) VALUES( ? ) ";
  $stmt = $mysqli->prepare($sql);

  if ($stmt) {
    $stmt->bind_param('s', $nome); // 's' corresponde a string => nome da marca

    $nome = 'Samsung';
    $ret1 = $stmt->execute(); // retorna true ou false

    $nome = 'Apple';
    $ret2 = $stmt->execute();

    $nome = 'Asus';
    $ret3 = $stmt->execute();

    if ($ret1 && $ret1 && $ret3)
      echo "<p>Registros inseridos.</p>\n";
    else
      echo "<p>Falha ao inserir registros.</p>\n";
    
    $stmt->close();
  }

}