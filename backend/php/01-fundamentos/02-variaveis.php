<html>
<head>
<title> Variaveis </title>
</head>
<body>

<?php

    $a=false;
    if ($a)
        echo "<h1> \$a= $a </h1>";
    else
        echo "<h2> \$a= $a </h2>";
    
    $b = 1;
    echo '<br> b = ' . $b;
    
    ($b) ? print "<br> b OK": print "<br> b Not OK";

    $c = 1.5;
    $d = '<br>' . "teste d: $c";
    $e = '<br>' . 'teste e: $c';
    
    echo $d;
    echo $e;
    
    print "<hr>";

    if (is_integer($a))
        echo "a =  int";
    if (is_integer($b))
        echo "b =  int";

    printf("<p> b=%08d </p>", $b);
    printf("<p> c=%08.4f </p>", $c);

    /*
        is_bool is_float is_null is_string is_array
    */ 

    $b++; 
    ++$b;
    $x=$y=$b;

    printf("<p> b=%08d </p>", $b);
    printf("<p> x=%08d </p>", $x);
    printf("<p> y=%08d </p>", $y);

    $x+=$y;
    $b = $y+= ++$x;
    printf("<p> b=%08d </p>", $b);

?>

</body>
