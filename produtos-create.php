<?php include('inc/header.php'); ?>

    <div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-12 main">
          <h1 class="page-header">Adicionar Produto</h1>

          <a href="produtos.php" class="btn btn-default">Ver listagem de Produtos</a>

          <hr>

          <form action="produtos-create-save.php" method="post" class="bs-example bs-example-form">

            <div class="form-group">
              <label for="produto-nome">Nome</label>
              <input type="text" class="form-control field_required" data-min="5" data-type="min" data-title="Nome" placeholder="Nome" id="produto-nome" name="produto-nome">
            </div>
            <div class="form-group">
              <label for="produto-descricao">Descrição</label>
              <textarea type="text" class="form-control field_required" data-min="5" data-type="min" data-title="Nome" placeholder="Descrição" id="produto-descricao" name="produto-descricao"></textarea>
            </div>
            <div class="form-group">
              <label for="produto-preco">Preço</label>
              <input type="text" class="form-control form-control-preco field_required" data-min="4" data-type="min" data-title="Preço" placeholder="Preço (R$)" id="produto-preco" name="produto-preco">
            </div>

            <button type="submit" class="btn btn-default right">Enviar</button>
          </form>
          
        </div>
      </div>
    </div>

<?php include('inc/footer.php'); ?>