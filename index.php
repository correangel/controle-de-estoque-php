<?php include('inc/header.php'); ?>

    <div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-12 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-4 col-sm-4 placeholder">
              <a href="produtos.php" title="Produtos">
                <img src="/assets/img/produtos.png" width="200" height="200" class="img-responsive" alt="Produtos">
              </a>
              <h4><a href="produtos.php" title="Produtos"><?php echo count_itens('Produto'); ?></a></h4>
              <span class="text-muted"><a href="produtos.php" title="Produtos">Produtos</a></span>
            </div>
            <div class="col-xs-4 col-sm-4 placeholder">
              <a href="clientes.php" title="Clientes">
                <img src="/assets/img/clientes.png" width="200" height="200" class="img-responsive" alt="Clientes">
              </a>
              <h4><a href="clientes.php" title="Clientes"><?php echo count_itens('Cliente'); ?></a></h4>
              <span class="text-muted"><a href="clientes.php" title="Clientes">Clientes</a></span>
            </div>
            <div class="col-xs-4 col-sm-4 placeholder">
              <a href="pedidos.php" title="Pedidos">
                <img src="/assets/img/pedidos.png" width="200" height="200" class="img-responsive" alt="Pedidos">
              </a>
              <h4><a href="pedidos.php" title="Pedidos"><?php echo count_itens('Pedido'); ?></a></h4>
              <span class="text-muted"><a href="pedidos.php" title="Pedidos">Pedidos</a></span>
            </div>
          </div>

        </div>
      </div>
    </div>

<?php include('inc/footer.php'); ?>