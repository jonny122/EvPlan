<?php
	include ('../../DA/Subtarea/Actualizar.php');

	$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$detalle = $_POST['detalle'];
		$estado = $_POST['estado'];
		$requisitos = $_POST['requisitos'];
		$cantidad =	$_POST['cantidad'];
		$total =	$_POST['total'];
		$idTarea =	$_POST['idTarea'];
	
	
		$subtarea = array('id'=>$id ,'nombre' => $nombre, 'detalle' => $detalle, 'estado' => $estado, 'requisitos' => $requisitos, 'cantidad' => $cantidad, 'total' => $total, 'idTarea' => $idTarea); 
		$result = actualizarSubtarea($subtarea);
?>