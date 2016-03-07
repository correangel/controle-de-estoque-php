<?php include('inc/header.php'); ?>

    <div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-12 main">
          <h1 class="page-header">Clientes</h1>

          <a href="clientes-create.php" class="btn btn-default">Adicionar Clientes</a>

          <hr>

          <?php action_alert('Cliente'); ?>

          <?php $clientes = get_itens('Cliente'); ?>

          <?php if($clientes): ?>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Telefone</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach($clientes as $i): ?>

                <tr>
                  <td><a href="clientes-read.php?id=<?php echo $i['id']; ?>"><?php echo $i['id']; ?></a></td>
                  <td><a href="clientes-read.php?id=<?php echo $i['id']; ?>"><?php echo $i['nome']; ?></a></td>
                  <td><?php echo $i['email']; ?></td>
                  <td><?php echo $i['telefone']; ?></td>
                  <td>
                    <a href="clientes-read.php?id=<?php echo $i['id']; ?>" title="Editar o item <?php echo $i['nome']; ?>" class="btn btn-default" aria-label="Left Align">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                    <a href="clientes-delete.php?id=<?php echo $i['id']; ?>" title="Remover o item <?php echo $i['nome']; ?>" class="btn btn-default btn-confirm-delete" aria-label="Left Align">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a>
                  </td>
                </tr>

                <?php endforeach; ?>

              </tbody>
            </table>
          </div>

          <?php else: ?>

          <h2 class="sub-header">Nenhum Cliente encontrado</h2>
          
          <?php endif; ?>
          
        </div>
      </div>
    </div>

<?php include('inc/footer.php'); ?>