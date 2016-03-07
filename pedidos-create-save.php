<?php 
  
  include('inc/config.php');
  include('inc/functions.php');

  if( isset($_POST['pedido-cliente']) && isset($_POST['pedido-produto']) ):

    $i = R::dispense( 'Pedido' );

    $i->id_cliente = $_POST['pedido-cliente'];
    $i->id_produto = $_POST['pedido-produto'];

    R::store( $i );

    header('Location: /pedidos.php?action=create');

  else:

    header('Location: /pedidos.php');

  endif;
?>