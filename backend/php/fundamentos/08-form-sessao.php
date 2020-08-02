<?php
    session_start(); 
?>
<html>
<head>
    <title> Formularios - 2 </title>
</head>
<body>
<hr>
<form action="form2.php" method="POST">
    <table border="0">
    <tr>
        <td> Nome                             </td>
        <td> <input type="text" name="nome">  </td>
    </tr>
    <tr>
        <td> Idade                            </td>
        <td> <input type="text" name="idade"> </td>
    </tr>
    <tr>
        <td> telefone                         </td>
        <td> <input type="text" name="telefone"></td>
    </tr>
    <tr>
        <td> Endereco                         </td>
        <td> <textarea name="endereco" rows="4"></textarea></td>
    </tr>
    <tr>
        <td> <input type="submit" value="Enviar"></td>
    </tr>
    </table>
</form>

<?php
    if (isset($_POST["nome"])) {
        $_SESSION["alunos"][] = $_POST;
    }
    if (count($_SESSION["alunos"])) {

        echo "<table border=\"0\">";

        foreach ($_SESSION["alunos"] as $aluno) {
            echo "<tr>";
            foreach($aluno as $atr => $val) {
                echo "<td> $atr:  </td>"; 
                echo "<td> $val </td>"; 
                echo "<td>   </td>"; 
            }
            echo "</tr>";
        }

        echo "</table>";
    }
    print_r($_SESSION["alunos"]);
?>


<hr>
</body>
</html>
