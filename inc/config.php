<?php

	date_default_timezone_set('America/Sao_Paulo');
	header('Content-Type: text/html; charset=utf-8');


	// db

	require 'rb.php';
	R::setup( 'mysql:host=localhost;dbname=controlephp', 'root', 'root' );
	R::useWriterCache(true);

?>