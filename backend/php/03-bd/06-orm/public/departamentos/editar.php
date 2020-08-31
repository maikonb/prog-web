<?php

require_once(__DIR__ . '/../template-html.php');

require_once(__DIR__ . '/../../db/Db.php');
require_once(__DIR__ . '/../../model/Departamento.php');
require_once(__DIR__ . '/../../dao/DaoDepartamento.php');
require_once(__DIR__ . '/../../config/config.php');

$conn = new Db(Config::db_host, Config::db_user, Config::db_password, Config::db_database);

if (! $conn->connect()) {
    die();
}

$daoDepartamento = new DaoDepartamento($conn);
$departamento = $daoDepartamento->porId( $_GET['id'] );
    
if (! $departamento )
    header('Location: ./index.php');

else {  
    ob_start();

?>
    <div class="container">
        <div class="py-5 text-center">
            <h2>Cadastro de Departamentos</h2>
        </div>
        <div class="row">
            <div class="col-md-12" >

              <form action="atualizar.php" class="card p-2 my-4" method="POST">
                  <div class="input-group">
                      <input type="hidden" name="id" 
                          value="<?php echo $departamento->getId(); ?>">                      
                      <input type="text" placeholder="Nome da Departamento" 
                          value="<?php echo $departamento->getNome(); ?>"
                          class="form-control" name="nome" required>
                      <div class="input-group-append">
                          <button type="submit" class="btn btn-secondary">
                              Salvar
                          </button>
                      </div>
                  </div>
              </form>

            </div>
        </div>
    </div>
<?php

    $content = ob_get_clean();
    echo html( $content );
} // else-if

?>
