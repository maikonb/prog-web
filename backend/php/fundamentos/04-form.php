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

    if (isset($_POST))
        $pessoas[] = $_POST;
    elseif (isset($_GET))
        $pessoas[]=$_GET;

?>
</body>
</html>
