<?php
    $pessoas = array();

    function adicionaPessoa(&$pessoas, $nome, $idade, $cidade) {
        $pessoas[] = array("nome"=>$nome, "idade"=>$idade, "cidade"=> $cidade);
    }


    function imprimePessoas($pessoas) {
        foreach($pessoas as $pessoa) {
           var_dump($pessoa);
        }
    }


    function getQuantidadePessoas($pessoas) {
    }

    function removePessoa($pessoas, $index) {
    }

    
    adicionaPessoa($pessoas,"joao", 21, "cuiaba");
    adicionaPessoa($pessoas,"maria", 24, "cuiaba");
    adicionaPessoa($pessoas,"jose", 22, "cuiaba");
    adicionaPessoa($pessoas,"marcos", 23, "roo");
    // imprimePessoas($pessoas);


    function adicionaPessoa2($nome, $idade, $cidade) {
        global $pessoas;
        $pessoas[] = array("nome"=>$nome, "idade"=>$idade, "cidade"=> $cidade);
    }

    adicionaPessoa2("ronaldo", 88, "roo");

    imprimePessoas($pessoas);
?>
