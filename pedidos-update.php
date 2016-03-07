<?php 
  
  include('inc/config.php');
  include('inc/functions.php');

  if( isset($_POST['pedido-cliente']) && isset($_POST['pedido-produto']) ):

    $i = get_item( 'Pedido', $_POST['id'] );

    $i->id_cliente = $_POST['pedido-cliente'];
    $i->id_produto = $_POST['pedido-produto'];

    R::store( $i );

    header('Location: /pedidos.php?action=update');

  else:

    header('Location: /pedidos.php');

  endif;
?>