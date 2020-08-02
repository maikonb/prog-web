
<html>
<head>
    <title> Calculadora </title>
</head>
<body>
<form action="calc.php" method="POST" name="calc">
    <table border="0">
        <tr>
            <td> Valor 1 </td>
            <td> <input type="text" name="valor1" value="0"> </td>
        </tr>
        <tr>
            <td> Valor 2 </td>
            <td> <input type="text" name="valor2" value="0"> </td>
        </tr>
        <tr>
            <td> Operacao </td>
            <td> 
                 <input type="radio" name="operacao" value="sum"        > +
                 <input type="radio" name="operacao" value="min"        > -
                 <input type="radio" name="operacao" value="div"        > /
                 <input type="radio" name="operacao" value="mul" checked> X
            </td>
        </tr>
        <tr>
            <td> <input type="submit" value="Enviar"></td>
        </tr>
    </table>
<form>

<?php
    if (isset($_POST) && isset($_POST["operacao"])) {
        switch ($_POST["operacao"]) {
            case "sum":
                $res = $_POST["valor1"] + $_POST["valor2"];
                break;
            case "min":
                $res = $_POST["valor1"] - $_POST["valor2"];
                break;
            case "div":
                $res = $_POST["valor1"] / $_POST["valor2"];
                break;
            case "mul":
                $res = $_POST["valor1"] * $_POST["valor2"];
                break;
        }
        echo "<h2> Resultado: $res </h1>";
    }
?>
</body>
</html>
