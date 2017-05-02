<?php
		include_once '../conexao.php'; 
		$codigo = $_GET['cod'];
			
		$query = mysql_query("DELETE FROM cliente WHERE idcliente = " . $codigo);
		
		//Script que faz o redirecionamento para uma página anterior;
		header("location:listar-clientes.php");
		//----------------------------------------------------------
		//----------------------------------------------------------
		
?>