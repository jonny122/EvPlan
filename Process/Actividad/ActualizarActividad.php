<?php
	include ('../../DA/Actividad/Actualizar.php');

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$region = $_POST['region'];
	$proposito = $_POST['proposito'];
	$requisito = $_POST['requisito'];
	$detalle =	$_POST['detalle'];
	$cantidadPersona =	$_POST['cantidadPersona'];
	$cantidadTotal =	$_POST['cantidadTotal'];
	$idCategoria =	$_POST['idCategoria'];
	$idUsuario =	$_POST['idUsuario'];
	
	$actividad = array('id' => $id,'nombre' => $nombre, 'region' => $region, 'proposito' => $proposito, 'requisito' => $requisito, 'detalle' => $detalle, 'cantidadPersona' => $cantidadPersona, 'cantidadTotal' => $cantidadTotal, 'idCategoria' => $idCategoria, 'idUsuario' => $idUsuario); 
		$result = actualizarActividad($actividad);
	echo $result;
?>