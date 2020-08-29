<?php

require_once('../db/Db.php');
require_once('../model/Marca.php');
require_once('../dao/DaoMarca.php');

function testar_inserir(DaoMarca $dao, Marca $dep): bool {
  echo "Testando 'inserir'... ";
  $ret = $dao->inserir($dep);
  echo ($ret) ? "Ok <br>\n" : "Erro <br>\n";
  return $ret;
}

function testar_porId(DaoMarca $dao, Marca $dep): bool {
  echo "Testando 'porId()'... ";
  $id = $dep->getId();
  $ret = false;
  $depById = $dao->porId($id);
  if (!is_null($depById)) {
    if ($depById->getNome() == $dep->getNome())
      $ret = true;
  }
  echo ($ret) ? "Ok <br>\n" : "Erro <br>\n";
  return $ret;
}

function testar_todos(DaoMarca $dao, Marca $dep): bool {
  echo "Testando 'todos()'... ";
  $ret = false;
  $deps = $dao->todos();
  if (is_array($deps) && count($deps)>0 ) {
    foreach($deps as $d) {
      if ($d->getId() == $dep->getId())
        if ($d->getNome() == $dep->getNome())
          $ret = true; 
    }
  }
  echo ($ret) ? "Ok <br>\n" : "Erro <br>\n";
  return $ret;
}

function testar_atualizar(DaoMarca $dao, Marca $dep): bool {
  echo "Testando 'atualizar()'... ";
  $ret = false;
  $novoNome = $dep->getNome() . '[modificado]';
  $dep->setNome( $novoNome );
  if ( $dao->atualizar($dep) ) {
    $depAtualizado = $dao->porId( $dep->getId() );
    $ret = $depAtualizado->getNome() === $novoNome;
  }
  echo ($ret) ? "Ok <br>\n" : "Erro <br>\n";
  return $ret;
}

function testar_remover(DaoMarca $dao, Marca $dep): bool {
  echo "Testando 'remover()'... ";
  $ret = false;
  if ( $dao->remover($dep) ) {
    $depRemovido = $dao->porId( $dep->getId() );
    $ret = is_null($depRemovido);
  }
  echo ($ret) ? "Ok <br>\n" : "Erro <br>\n";
  return $ret;
}


function testar_DaoMarcas(): bool {
  $db = new Db("localhost", "user", "user", "vendas");

  if ($db->connect()) {
    $daoDep = new DaoMarca($db);
    $dep = new Marca("marca teste");

    testar_inserir($daoDep, $dep);
    testar_porId($daoDep, $dep);
    testar_todos($daoDep, $dep);
    testar_atualizar($daoDep, $dep);
    testar_remover($daoDep, $dep);

    return true;
  }
  else {
    echo "<p>Erro na conexão com o banco de dados.</p>\n";
    return false;
  }    
}

testar_DaoMarcas();
