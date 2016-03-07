<?php 
  
  include('inc/config.php');
  include('inc/functions.php');

  if( isset($_GET['id']) ):

    $i = get_item( 'Produto', $_GET['id'] );

    R::trash( $i );

    header('Location: /produtos.php?action=delete');

  else:

    header('Location: /produtos.php');

  endif;
?>