
<html>
<head>
<title> Arrays </title>
</head>
<body>

<?php

    $a = [];
    $a[] = 100;
    $a[] = 200;
    $a[] = 300;
    $a[] = 400;
    $a[] = 500;
    $a[] = 600;
    $a[] = "Teste";
    $a[] = 50.0;
    $a[] = true;
    $a[] = false;
    print_r($a);

    echo '<br>';
    echo "<hr>";

    $b['a']=10; 
    $b['b']=20; 
    $b['c']=30; 
    $b['d']=40; 
    $b['e']='letra e'; 
    $b['letra e']='Indice E'; 
    $b['f'] = [ 3 => 4, 50 => 100, "a" => 100 ];

    print_r($b);
    echo "<hr>";

    $aluno["joao"]["idade"] = 20;
    $aluno["joao"]["pai"] = "Joaquim" ;
    $aluno["joao"]["endereco"] = "Rua Brasil" ;
    $aluno["joao"]["nota"] = 5.5 ;

    $aluno["ademir"]["idade"] = 23;
    $aluno["ademir"]["pai"] = "José" ;
    $aluno["ademir"]["endereco"] = "Av. MT" ;
    $aluno["ademir"]["notafinal"] = 9.5 ;

    $aluno["maria"] = [ "idade"=>20,  "pai" => "José" , "nota"=>10  ];
    $aluno["maria"]["endeco"] = "Rua rdononopolis";
    $aluno["paulo"] = array("idade"=>23,  "pai" => "Fabio" , "nota"=>5);

    print_r($aluno);

    $nome = 'Maria';
    echo '<p> O nome da pessoa eh $nome </p>';

    echo "<hr>";

    echo '<br>';
    $a = array (10,20,30,40,50,60,70,80,90,100);
    $b = [10,20,30,40,50,60,70,80,90,100]; // =>
    print_r($a);

    $a[] = 110;
    $a[] = 120;
    $a[] = 130;
    $a[] = 140;
    $a[] = 150;
    
    echo '<br>';
    print_r($a);

    echo '<br>';

    echo "<hr>";
    echo "<br> numero de elementos de a[] == " . count($a);
    echo "<br> numero de elementos de aluno[] == " . count($aluno);
    echo "<br> numero de elementos de aluno['joao'] == " . count($aluno['joao']);
?>
</body>
