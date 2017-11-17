<?php
	include ('../../DA/Subtarea/Insertar.php');

		
		
		$nombre = $_POST['nombre'];
		$detalle = $_POST['detalle'];
		$estado = $_POST['estado'];
		$requisitos = $_POST['requisitos'];
		$cantidad =	$_POST['cantidad'];
		$total =	$_POST['total'];
		$idTarea =	$_POST['idTarea'];
	
		$subtarea = array('nombre' => $nombre, 'detalle' => $detalle, 'estado' => $estado, 'requisitos' => $requisitos, 'cantidad' => $cantidad, 'total' => $total, 'idTarea' => $idTarea); 
		$result = insertarSubtarea($subtarea);
		if($result == true){
			header("Location: /EvPlan/subtarea");
		}
	
	
?>