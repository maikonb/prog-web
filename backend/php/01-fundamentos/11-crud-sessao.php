<?php
    session_start(); 
?>
<html>
<head>
    <title> Formularios - 3 </title>
</head>
<body>
<hr>

<?php
    echo $_POST['submit'];

    if ($_POST["acao"]=="Cadastrar") {
        
        if (isset($_POST["nome"])) {
            unset($_POST["acao"]);

            if (!isset($_SESSION["ultimoID"]))
                $_SESSION["ultimoID"] = 0;
            else 
                $_SESSION["ultimoID"]++;

            $_POST["id"] = $_SESSION["ultimoID"];

            $_SESSION["alunos"][$_POST["id"]] = $_POST;
        }
    } 
    if ($_POST["acao"]=="Salvar") {
        
        unset($_POST["acao"]);

        if (isset($_POST["id"])) {
            $_SESSION["alunos"][$_POST["id"]] = $_POST;
        }
    } 
    elseif ($_POST["acao"]=="Apagar") {
        if (isset($_POST["id"])) {
            unset ($_SESSION["alunos"][$_POST["id"]]);
        }
    }
    elseif ($_POST["acao"]=="Editar") {
        $editar = $_SESSION["alunos"][$_POST["id"]];
        echo $nome;
    }
?>

<form action="form3.php" method="POST">
    <td> <input type="hidden" name="id" value="<?php echo $editar["id"];?>">  </td>

    <table border="0">
    <tr>
        <td> Nome                             </td>
        <td> <input type="text" name="nome" value="<?php echo $editar["nome"];?>">  </td>
    </tr>
    <tr>
        <td> Idade                            </td>
        <td> <input type="text" name="idade" value="<?php echo $editar["idade"];?>"  > </td>
    </tr>
    <tr>
        <td> telefone                         </td>
        <td> <input type="text" name="telefone" value="<?php echo $editar["telefone"];?>" ></td>
    </tr>
    <tr>
        <td> Endereco                         </td>
        <td> <textarea name="endereco" rows="4" ><?php echo $editar["endereco"];?></textarea></td>
    </tr>
    <tr>
        <?php 
            if (isset($editar)) {
                echo "<td> <input type=\"submit\" name=\"acao\" value=\"Salvar\"></td>";
                echo "<td> <input type=\"submit\" name=\"acao\" value=\"Cancelar\"></td>";
            } else
                echo "<td> <input type=\"submit\" name=\"acao\" value=\"Cadastrar\"></td>";
        ?>
    </tr>
    </table>
</form>

<?php

    if (count($_SESSION["alunos"])) {

        echo "<table border=\"0\">";

        foreach ($_SESSION["alunos"] as $aluno) {
            echo "<tr>";
            foreach($aluno as $atr => $val) {
                echo "<td> $atr:  </td>"; 
                echo "<td> $val </td>"; 
                echo "<td>   </td>"; 
            }
            echo "<form method=\"POST\" action=\"form3.php\">";
            echo "<input type=\"hidden\" name=\"id\" value=" . $aluno["id"] . ">";
            echo "<td> <input type=\"submit\" name=\"acao\" value=\"Apagar\" >  </td>"; 
            echo "<td> <input type=\"submit\" name=\"acao\" value=\"Editar\" >  </td>"; 
            echo "</form>";
            echo "</tr>";
        }

        echo "</table>";
    }
?>

<hr>
</body>
</html>
