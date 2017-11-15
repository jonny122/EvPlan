<?php
	$id = $_POST["id"];
	session_start();
	$_SESSION["id"] = $id;
	require ('../../DA/Actividad/ListarDetallesActividades.php');

	function listar(){
		$_SESSION["DetallesActividad"] = listarDetalleActividades($_SESSION["id"]);	
	}
	listar();
	header("location: /EvPlan/detalleActividad");
?>