<?php

require_once(__DIR__ . '/../template-html.php');

require_once(__DIR__ . '/../../db/Db.php');
require_once(__DIR__ . '/../../model/Produto.php');
require_once(__DIR__ . '/../../dao/DaoProduto.php');
require_once(__DIR__ . '/../../config/config.php');

$conn = new Db(Config::db_host, Config::db_user, Config::db_password, Config::db_database);

if (! $conn->connect()) {
    die();
}

$daoProduto = new DaoProduto($conn);
$produto = $daoProduto->porId( $_GET['id'] );
    
if (! $produto )
    header('Location: ./index.php');

else {  
    ob_start();

?>
    <div class="container">
        <div class="py-5 text-center">
            <h2>Cadastro de Produtos</h2>
        </div>
        <div class="row">
            <div class="col-md-12" >

              <form action="atualizar.php" class="card p-2 my-4" method="POST">
                  <div class="input-group">
                      <input type="hidden" name="id" 
                          value="<?php echo $produto->getId(); ?>">                      
                      <input type="text" placeholder="Nome da Produto" 
                          value="<?php echo $produto->getNome(); ?>"
                          class="form-control" name="nome" required>
                      <div class="input-group-append">
                          <button type="submit" class="btn btn-primary">
                              Salvar
                          </button>
                      </div>
                  </div>
              </form>
              <a href="index.php" class="btn btn-secondary ml-1" role="button" aria-pressed="true">Cancelar</a>

            </div>
        </div>
    </div>
<?php

    $content = ob_get_clean();
    echo html( $content );
} // else-if

?>