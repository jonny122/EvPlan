<?php
	//require ('./Subtarea/../Process/../DA/Subtarea/listarSubTarea.php');
	$id = $_POST["idSubT"];
	session_start();
	$_SESSION["idSubTare"] = $id;
	 
	require ('../../DA/Subtarea/listarSubTarea.php');
	
	function listarSubTarea(){
		
		$_SESSION["listarDetalleSubTarea"] = listarSubTareas($_SESSION["idSubTare"]);
			
	}
	listarSubTarea();
	header("location: /EvPlan/subtarea");
?>