<?php include('inc/header.php'); ?>

    <div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-12 main">
          <h1 class="page-header">Produtos</h1>

          <a href="produtos-create.php" class="btn btn-default">Adicionar Produtos</a>

          <hr>

          <?php action_alert('Produto'); ?>

          <?php $produtos = get_itens('Produto'); ?>

          <?php if($produtos): ?>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>Descrição</th>
                  <th>Preço</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach($produtos as $i): ?>

                <tr>
                  <td><a href="produtos-read.php?id=<?php echo $i['id']; ?>"><?php echo $i['id']; ?></a></td>
                  <td><a href="produtos-read.php?id=<?php echo $i['id']; ?>"><?php echo $i['nome']; ?></a></td>
                  <td><?php echo $i['descricao']; ?></td>
                  <td>R$ <?php echo str_replace('.', ',', $i['preco']); ?></td>
                  <td>
                    <a href="produtos-read.php?id=<?php echo $i['id']; ?>" title="Editar o item <?php echo $i['nome']; ?>" class="btn btn-default" aria-label="Left Align">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                    <a href="produtos-delete.php?id=<?php echo $i['id']; ?>" title="Remover o item <?php echo $i['nome']; ?>" class="btn btn-default btn-confirm-delete" aria-label="Left Align">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a>
                  </td>
                </tr>

                <?php endforeach; ?>

              </tbody>
            </table>
          </div>

          <?php else: ?>

          <h2 class="sub-header">Nenhum Produto encontrado</h2>
          
          <?php endif; ?>
          
        </div>
      </div>
    </div>

<?php include('inc/footer.php'); ?>