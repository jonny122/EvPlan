<?php
	//require ('./Subtarea/../Process/../DA/Subtarea/listarSubTarea.php');
	$id = $_POST["id"];
	session_start();
	$_SESSION["idTare"] = $id;
	 
	require ('../../DA/Subtarea/listarSubTarea.php');
	
	function listarSubTarea($id){
		
		$_SESSION["listarDetalleSubTarea"] = listarSubTareas($_SESSION["idTare"]);
			
	}
	listarSubTarea();
	header("location: /EvPlan/subtarea");
?>