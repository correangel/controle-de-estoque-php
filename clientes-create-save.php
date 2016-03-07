<?php 
  
  include('inc/config.php');
  include('inc/functions.php');

  if( isset($_POST['cliente-nome']) && isset($_POST['cliente-email']) && isset($_POST['cliente-telefone']) ):

    $i = R::dispense( 'Cliente' );

    $i->nome = $_POST['cliente-nome'];
    $i->email = $_POST['cliente-email'];
    $i->telefone = $_POST['cliente-telefone'];

    R::store( $i );

    header('Location: /clientes.php?action=create');

  else:

    header('Location: /clientes.php');

  endif;
?>