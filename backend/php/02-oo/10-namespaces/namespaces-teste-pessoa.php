<?php
    
    
    // Modo 1
    // Seu código faz parte de um namespace.
    // Neste modo você compartilha todas as classes desse namespace

    namespace PessoaFisica;
    // namespace PessoaJuridica;

    require_once('02-11-namespaces-pessoa2.php');
    require_once('02-11-namespaces-pessoa1.php');

    $p = new Pessoa("Andre Pinheiro", 50);
    $p->imprimir();

    
    
    // Modo 2
    // Seu código utiliza um namespace
    use \PessoaFisica\Pessoa;
    //use PessoaJuridica\Pessoa;

    require_once('02-11-namespaces-pessoa2.php');
    require_once('02-11-namespaces-pessoa1.php');

    $p = new Pessoa("Andre Pinheiro", 50);
    $p->imprimir();

    
    
    // Modo 3
    // Variação do Modo 2
    use \PessoaFisica\Pessoa as PessoaFisica;
    //use PessoaJuridica\Pessoa as PessoaJuridica;

    require_once('02-11-namespaces-pessoa2.php');
    require_once('02-11-namespaces-pessoa1.php');

    $p = new PessoaFisica("Andre Pinheiro", 50);
    //$p = new PessoaJuridica("Andre Pinheiro", 50);
    $p->imprimir();
    



    // Modo 4
    // Variação do Modo 2: nao utiliza o use,
    // o namespace vai na instância da classe

    require_once('02-11-namespaces-pessoa2.php');
    require_once('02-11-namespaces-pessoa1.php');

    //$p = new \PessoaFisica\Pessoa("Andre Pinheiro", 50);
    $p = new \PessoaJuridica\Pessoa("Andre Pinheiro", 50);
    $p->imprimir();
?>
