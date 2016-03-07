<?php 
  
  include('inc/config.php');
  include('inc/functions.php');

  if( isset($_POST['id']) ):

    $i = get_item( 'Produto', $_POST['id'] );


    $i->nome = $_POST['produto-nome'];
    $i->descricao = $_POST['produto-descricao'];
    $i->preco = str_replace(',', '.', $_POST['produto-preco']);

    R::store( $i );

    header('Location: /produtos.php?action=update');

  else:

    header('Location: /produtos.php');

  endif;
?>