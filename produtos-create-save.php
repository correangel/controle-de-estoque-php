<?php 
  
  include('inc/config.php');
  include('inc/functions.php');

  if( isset($_POST['produto-nome']) && isset($_POST['produto-descricao']) && isset($_POST['produto-preco']) ):

    $i = R::dispense( 'Produto' );

    $i->nome = $_POST['produto-nome'];
    $i->descricao = $_POST['produto-descricao'];
    $i->preco = str_replace(',', '.', $_POST['produto-preco']);

    R::store( $i );

    header('Location: /produtos.php?action=create');

  else:

    header('Location: /produtos.php');

  endif;
?>