<?php  
	include ('../../DA/Tarea/Actualizar.php');
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$detalle = $_POST['detalle'];
		$estado = $_POST['estado'];
		$requisitos = $_POST['requisitos'];
		$cantidad =	$_POST['cantidad'];
	   	$total = $_POST['total'];
		$idActividad =	$_POST['idActividad'];
		$tarea = array('id' => $id,'nombre' => $nombre, 'detalle' => $detalle, 'estado' => $estado, 'requisitos' => $requisitos, 'cantidad' => $cantidad, 'total' => $total, 'idActividad' => $idActividad); 
		$result = actualizarTarea($tarea);
		if($result == true){
			header("Location: /EvPlan/tarea");
		}
		

?>	
