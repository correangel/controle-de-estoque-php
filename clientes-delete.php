<?php 
  
  include('inc/config.php');
  include('inc/functions.php');

  if( isset($_GET['id']) ):

    $i = get_item( 'Cliente', $_GET['id'] );

    R::trash( $i );

    header('Location: /clientes.php?action=delete');

  else:

    header('Location: /clientes.php');

  endif;
?>