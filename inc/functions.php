<?php
	

	function get_itens($table = '', $extra = 'ORDER BY id DESC'){
		
		if( !$table ){ return; }

		$i = R::getAll( "SELECT * FROM $table $extra");
		return $i;
	}

	function get_itens_query($query = ''){
		
		if( !$query ){ return; }

		$i = R::getAll( $query );
		return $i;
	}


	function get_item($table = '', $id = ''){
		
		if( !$table || !$id ){ return; }

		$i = R::load( $table, $id );

		return $i;
	}


	function count_itens($table = '', $extra = ''){

		if( !$table ){ return; }

		$c = R::getRow( "SELECT count(*) as count FROM $table $extra");

		return $c['count'];
	}


	function action_alert($area = ''){

		if( !$area ){ return; }

		if( isset($_GET['action']) ):

			$action = $_GET['action'];
			$r = '';

			switch ($action) {
			    case 'create':
			        $r = 'adicionado';
			        break;
			    case 'update':
			        $r = 'atualizado';
			        break;
			    case 'delete':
			        $r = 'removido';
			        break;
			}

			echo '<div class="alert alert-success" role="alert"> <strong>'.$area.'</strong> '.$r.' com sucesso. </div>';

		endif;

	}

?>