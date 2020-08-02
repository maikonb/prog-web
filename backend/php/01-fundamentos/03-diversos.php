<html>
<head>
<title>Teste de PHP</title>
</head>
<body>
<?php

    $s1 = "<b>Olá Mundo </b>";
    $s2 = "<h1>PHP!!</h1>";
    echo $s1 . $s2 ;

    $i = 100;
    $soma = $i + 100;
    $sub  = $i - 50;
    $div  = $i / 5;
    $mul  = $i * 5;
    $resto= $i % 3;

    $f = 50.0;
    
    printf("%05d %d %d %d %d %5.2f",
        $soma, $sub, $div, 
        $mul, $resto, $f);
    echo "<p>" . $div ."</p>";
    
    $si = "100";

    // Comentario 
    /* comentario1
       comentario2*/
    // >  <  >=  <=  ==  ===  !=

    $b = $i === $si;
    if ($b) { 
        echo "b = true";
    }
    else{
        echo "b = false";
    }

    if (is_integer($i))
        echo "<p>i = inteiro</p>";
    if (is_string($si))
        echo "<p> si = string</p>";
    if (is_float($f))
        echo "<p> f = float</p>";
    if (is_bool($b))
        echo "<p> b = bool</p>";
    if (is_bool($b) && $b == false)
        echo "<p> b = bool e false</p>";
    if (!is_integer($b))
        echo "<p> b not integer</p>";

    // && (and) /  || (or)
    
    $i  = 1;
    $i++;
    ++$i;
    echo "<p>" . $i . "</p>";
    $i += 2; // $i = $i + 2 (+ - * /)
?>
</body>
</html>
