<html>
<head>
    <title> Form 1 - Processamento </title>
</head>
<body>
<?php
    echo "<p> POST: <br>";
    print_r($_POST);
    echo "</p>";
    echo "<p> GET: <br>";
    print_r($_GET);
    echo "</p>";

    if (count($_POST) > 0)
        $pessoas[] = $_POST;
    elseif (count($_GET) > 0)
        $pessoas[]=$_GET;

?>
</body>
</html>
