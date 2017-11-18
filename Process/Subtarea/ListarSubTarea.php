<?php
	//require ('./Subtarea/../Process/../DA/Subtarea/listarSubTarea.php');
	$id = $_POST["id"];
	session_start();
	$_SESSION["idTare"] = $id;
	 
	require ('../../DA/Subtarea/listarSubTarea.php');
	
	function listarSubTarea(){
		
		$_SESSION["listarDetalleSubTarea"] = listarSubTareas(1);
			
	}
	listarSubTarea();
	header("location: /EvPlan/subtarea");
?>