<?php
  if( !isset($_GET['id']) ){
    header('Location: /produtos.php');
  }
  include('inc/header.php');

  $i = get_item( 'Produto', $_GET['id'] );
?>

    <div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-12 main">
          <h1 class="page-header">Editar Produto - <?php echo $i['nome']; ?></h1>

          <a href="produtos.php" class="btn btn-default">Ver listagem de Produtos</a>

          <hr>

          <form action="produtos-update.php" method="post" class="bs-example bs-example-form">

            <input type="hidden" name="id" id="id" value="<?php echo $i['id']; ?>">

            <div class="form-group">
              <label for="produto-nome">Nome</label>
              <input type="text" class="form-control field_required" data-min="5" data-type="min" data-title="Nome" placeholder="Nome" id="produto-nome" name="produto-nome" value="<?php echo $i['nome']; ?>">
            </div>
            <div class="form-group">
              <label for="produto-descricao">Descrição</label>
              <textarea type="text" class="form-control field_required" data-min="5" data-type="min" data-title="Nome" placeholder="Descrição" id="produto-descricao" name="produto-descricao"><?php echo $i['descricao']; ?></textarea>
            </div>
            <div class="form-group">
              <label for="produto-preco">Preço</label>
              <input type="text" class="form-control form-control-preco field_required" data-min="4" data-type="min" data-title="Preço" placeholder="Preço (R$)" id="produto-preco" name="produto-preco" value="<?php echo str_replace('.',',',$i['preco']); ?>">
            </div>

            <button type="submit" class="btn btn-default right">Salvar</button>
          </form>
          
        </div>
      </div>
    </div>

<?php include('inc/footer.php'); ?>