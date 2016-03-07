<?php 
  
  include('inc/config.php');
  include('inc/functions.php');

  if( isset($_POST['id']) ):

    $i = get_item( 'Cliente', $_POST['id'] );

    $i->nome = $_POST['cliente-nome'];
    $i->email = $_POST['cliente-email'];
    $i->telefone = $_POST['cliente-telefone'];

    R::store( $i );

    header('Location: /clientes.php?action=update');

  else:

    header('Location: /clientes.php');

  endif;
?>