<?php
	$id = $_POST["idTarea"];
	session_start();
	$_SESSION["idTare"] = $id;
	require ('../../DA/Tarea/listarTarea.php');
	

	function listarDetalleTarea(){
		
		$_SESSION["listarDetalleTarea"] = listarTareas($_SESSION["idTare"]);	
	}

	listarDetalleTarea();
	header("location: /EvPlan/tarea");
	
?>