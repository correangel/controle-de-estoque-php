<?php
  if( !isset($_GET['id']) ){
    header('Location: /clientes.php');
  }
  include('inc/header.php');

  $i = get_item( 'Cliente', $_GET['id'] );
?>

    <div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-12 main">
          <h1 class="page-header">Adicionar Cliente</h1>

          <a href="clientes.php" class="btn btn-default">Ver listagem de Clientes</a>

          <hr>

          <form action="clientes-update.php" method="post" class="bs-example bs-example-form">

            <input type="hidden" name="id" id="id" value="<?php echo $i['id']; ?>">

            <div class="form-group">
              <label for="cliente-nome">Nome</label>
              <input type="text" class="form-control field_required" data-min="5" data-type="min" data-title="Nome" placeholder="Nome" id="cliente-nome" name="cliente-nome" value="<?php echo $i['nome']; ?>">
            </div>
            <div class="form-group">
              <label for="cliente-email">Email</label>
              <input type="text" class="form-control field_required" data-type="email" data-title="Email" placeholder="Email" id="cliente-email" name="cliente-email" value="<?php echo $i['email']; ?>">
            </div>
            <div class="form-group">
              <label for="cliente-telefone">Telefone</label>
              <input type="text" class="form-control field_required" data-min="9" data-type="min" data-title="Telefone" placeholder="Telefone" id="cliente-telefone" name="cliente-telefone" value="<?php echo $i['telefone']; ?>">
            </div>

            <button type="submit" class="btn btn-default right">Enviar</button>
          </form>
          
        </div>
      </div>
    </div>

<?php include('inc/footer.php'); ?>