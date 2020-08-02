<html>
<head>
<title> loops </title>
</head>
<body>

<?php

    $a = array(1,2,3,4,5,6,7); 

    for ($i=0;$i<count($a);$i++) {
        echo "<br>";
        echo "<font size=\"" . $a[$i]. "\" > " . "Fonte-" . $a[$i] . "</font>";
    }

    $i = count($a);
    while ($i--) {
        echo "<br>";
        echo "<font size=\"" . $a[$i]. "\" > " . "Fonte-" . $a[$i] . "</font>";
    }
   
    foreach ($a as $i) {
        echo "<br>";
        echo "<font size=\"" . $i. "\" > " . "Fonte-" . $i . "</font>";
    }

    echo "<br><br><br>";
    print_r($a);
    echo "<br><br><br>";

    foreach ($a as $i => $v) {
        echo "<br>";
        echo "<font size=\"" . $v. "\" > " . "a[$i] = $v " .  "</font>";
    }

    $aluno["joao"]["idade"] = 20;
    $aluno["joao"]["pai"] = "Joaquim" ;
    $aluno["joao"]["endereco"] = "Rua Brasil" ;
    $aluno["joao"]["nota"] = 5.5 ;

    $aluno["ademir"]["idade"] = 23;
    $aluno["ademir"]["pai"] = "Jose" ;
    $aluno["ademir"]["endereco"] = "Av. MT" ;
    $aluno["ademir"]["nota"] = 9.5 ;

    echo "<hr>"; 
    
    //Exercicio
    //foreach ( Array as Valor);
    //foreach ( Array as Chave=>Valor);

    foreach ($aluno as $nome => $atributo) {
        echo "<p>";
        echo "Nome: $nome <br>";
        foreach ($atributo as $atr => $valor) {
            echo "$atr: $valor";
            echo "<br>";
        }
        echo "</p>";
    }
    
    //
    echo "<hr>"; 

    $a = array(1,2,3,4,5,6,7); 

    echo "<p>"; print_r($a); echo "</p>";

    unset($a[3]);
    echo "<p>"; print_r($a); echo "</p>";
    
    $a[]=8;
    echo "<p>"; print_r($a); echo "</p>";

    $a = array_values($a);
    echo "<p>";  print_r($a); echo "</p>";

?>

</body>
