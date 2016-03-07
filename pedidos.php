<?php include('inc/header.php'); ?>

    <div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-12 main">
          <h1 class="page-header">Pedidos</h1>

          <a href="pedidos-create.php" class="btn btn-default">Adicionar Pedidos</a>

          <hr>

          <?php action_alert('Pedido'); ?>

          <?php $pedidos = get_itens('Pedido'); ?>

          <?php $pedidos = get_itens_query("SELECT Pedido.id, Cliente.nome as cliente, Produto.nome as produto FROM Pedido LEFT JOIN Cliente on (Pedido.id_cliente = Cliente.id) LEFT JOIN Produto on (Pedido.id_produto = Produto.id) ORDER BY Pedido.id DESC "); ?>

          <?php if($pedidos): ?>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Cliente</th>
                  <th>Produto</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach($pedidos as $i): ?>

                <tr>
                  <td><a href="pedidos-read.php?id=<?php echo $i['id']; ?>"><?php echo $i['id']; ?></a></td>
                  <td><?php echo $i['cliente']; ?></td>
                  <td><?php echo $i['produto']; ?></td>
                  <td>
                    <a href="pedidos-read.php?id=<?php echo $i['id']; ?>" title="Editar o item <?php echo $i['id']; ?>" class="btn btn-default" aria-label="Left Align">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                    <a href="pedidos-delete.php?id=<?php echo $i['id']; ?>" title="Remover o item <?php echo $i['id']; ?>" class="btn btn-default btn-confirm-delete" aria-label="Left Align">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a>
                  </td>
                </tr>

                <?php endforeach; ?>

              </tbody>
            </table>
          </div>

          <?php else: ?>

          <h2 class="sub-header">Nenhum Pedido encontrado</h2>
          
          <?php endif; ?>
          
        </div>
      </div>
    </div>

<?php include('inc/footer.php'); ?>