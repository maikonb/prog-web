<?php

    require_once('Pessoa.php');

    $p1 = new Pessoa();
    $p1->setNome("Rodrigo");
    $p1->setIdade(45) ;

    $p2 = new Pessoa("Marcos");
    $p2->setIdade(80) ;

    $p3 = new Pessoa("Paulo", 15);

    echo $p1->getHtml();
    echo $p2->getHtml();
    echo $p3->getHtml();


?>