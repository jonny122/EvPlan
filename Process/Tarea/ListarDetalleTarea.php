<?php
	$id = $_POST["id"];
	session_start();
	$_SESSION["idTare"] = $id;
	require ('../../DA/Tarea/listarTarea.php');

	

	function listarDetalleTarea($id){
		
		$_SESSION["listarDetalleTarea"] = listarTareas($_SESSION["idTare"]);
			
	}
	listarDetalleTarea();
	header("location: /EvPlan/tarea");
	
?>