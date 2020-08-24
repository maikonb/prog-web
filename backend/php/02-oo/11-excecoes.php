<?php

    function somar_inteiros($n1, $n2) {
        if (is_integer($n1) && is_integer($n2)) 
            return $n1 + $n2;
        else
            throw new Exception("O valor passado por parametro não é um inteiro válido.");
    }
    
    $n = somar_inteiros(100, 200);
    echo "<p>Valor da soma: $n</p>\n";
    
    // Causando um erro:
    // $n = somar_inteiros(100, "200");
    // echo "<p>Valor da soma: $n</p>\n";
    
    $n = null;

    // Tente executar alguma coisa
    try {
        $n = somar_inteiros(100, "200");
    }
    // Se ocorrer qualquer exceçao, o bloco de catch será executado
    catch(Exception $e) {
        echo "<p>Ocorreu um erro.</p>\n"; 
        echo "<p>O erro é: " . $e->getMessage() . "</p>\n"; 
    }
    // Esse bloco sempre será executado, havendo ou não uma exceção
    finally {
        if (isset($n))
            echo "<p>Valor da soma: $n</p>\n";
    }


    // Criando sua propria Exception

    class NumeroInteiroInvalido extends Exception {
        public function mensagemDoErro() {
            $linhaDoErro    = $this->getLine();
            $arquivoComErro = $this->getFile();
            $mensagem       = $this->getMessage();
            $s = "<p>INTEIRO INVALIDO. Erro no arquivo: $arquivoComErro na linha: $linhaDoErro. Mensagem: $mensagem</p>\n";
            return $s;
        }
    }

    class StringInvalida extends Exception {
        public function mensagemDoErro() {
            $linhaDoErro    = $this->getLine();
            $arquivoComErro = $this->getFile();
            $mensagem       = $this->getMessage();
            $s = "<p>STRING INVALIDA. Erro no arquivo: $arquivoComErro na linha: $linhaDoErro. Mensagem: $mensagem</p>\n";
            return $s;
        }
    }

    function multiplica($n, $y, $msg) {
        if (!is_integer($n) || !is_integer($y)) 
            throw new NumeroInteiroInvalido("Numero invalido.");
        if (!is_string($msg)) 
            throw new StringInvalida("String invalida.");
        $r = $n * $y;
        return "$msg: $r\n"; 
    }
    
    // Encadeamento de multiplas excecoes

    $res = null;
    try {
        $res = multiplica(10,4,"Este é o resultado");
    }
    catch(NumeroInteiroInvalido $e) {
        echo "<p>Você digitou um numero errado. Segue a mensagem do erro: </p>\n";
        echo $e->mensagemDoErro();
    }
    catch(StringInvalida $e) {
        echo "<p>Você digitou uma string errada. Segue a mensagem do erro: </p>\n";
        echo $e->mensagemDoErro();
    }
    catch(Exception $e) {
        echo "<p>Ocorreu um erro desconhecido.</p>\n";
        echo $e->getMessage();
    }
    finally {
        if (!is_null($res))
            echo $res;
    }


?>