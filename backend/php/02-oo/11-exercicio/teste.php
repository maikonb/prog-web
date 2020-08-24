<?php
    require_once('Produto.php');
    require_once('Cliente.php');
    require_once('Departamento.php');
    require_once('Venda.php');
    require_once('VendaProduto.php');
    require_once('Vendedor.php');
    require_once('PessoaFisica.php');

    $depAlimentos = new Departamento(1, "Alimentos");
    $depRoupas = new Departamento(2, "Roupas");

    $pastel = new Produto(1, "Pastel", 5.00, $depAlimentos);
    $feijao = new Produto(2, "Feijao", 10.00, $depAlimentos);
    $camiseta = new Produto(3, "Camiseta Polo", 50.00, $depRoupas);

    $cliMarcelo = new Cliente(1, "Marcelo Silva", "End. Marcelo", 
        "66 98774544", 100);
    $vendedorRui = new Vendedor(1, "Rui", "Rua Brasil", 
        "65 98111-4578", 5000);
    
    $venda1 = new Venda(1, $cliMarcelo, 0, [], $vendedorRui);
    $venda1->addProduto(new VendaProduto($pastel, 1, 0));
    $venda1->addProduto(new VendaProduto($camiseta, 2, 0.10));
    $venda1->addProduto(new VendaProduto($feijao, 1, 0));

    $venda2 = new Venda(1, $cliMarcelo, 0, [], $vendedorRui);
    $venda2->addProduto(new VendaProduto($pastel, 1, 0));
    $venda2->addProduto(new VendaProduto($camiseta, 2, 0.10));
    $venda2->addProduto(new VendaProduto($feijao, 1, 0));

    $venda3 = new Venda(1, $cliMarcelo, 0, [], $vendedorRui);
    $venda3->addProduto(new VendaProduto($pastel, 1, 0));
    $venda3->addProduto(new VendaProduto($camiseta, 2, 0.10));
    $venda3->addProduto(new VendaProduto($feijao, 1, 0));

    $vendas = [$venda1, $venda2, $venda3];
    foreach($vendas as $v) {
        echo "Nome Cliente: " . $v->getCliente()->getNome() . "<br>";
        echo "Nome Vendedor: " . $v->getVendedor()->getNome() . "<br>";
        echo "<ul>";
        foreach($v->getProdutos() as $vp) {
            echo "<li>";
            echo $vp->getProduto()->getNome() . 
                " Quantidade: " . $vp->getQuantidade() . 
                " Desconto: " . $vp->getDesconto();
            echo "</li>";
        }
        echo "</ul>";
        echo "<hr>";
    }

    // Obter o nome do departamento do primeiro produto da venda1
    echo "Departamento: " . 
        $venda1->getProdutos()[0]->getProduto()->getDepartamento()->getNome();
?>