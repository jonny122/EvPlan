<?php  
	include ('../../DA/Tarea/Insertar.php');
	
		$nombre = $_POST['nombre'];
		$detalle = $_POST['detalle'];
		$estado = $_POST['estado'];
		$requisitos = $_POST['requisitos'];
		$cantidad =	$_POST['cantidad'];
	   	$total = $_POST['total'];
		$idActividad =	$_POST['idActividad'];
		$tarea = array('nombre' => $nombre, 'detalle' => $detalle, 'estado' => $estado, 'requisitos' => $requisitos, 'cantidad' => $cantidad, 'total' => $total, 'idActividad' => $idActividad); 
		$result = actualizarTarea($tarea);
		if($result == true){
			header("Location: /EvPlan/tarea");
		}
		
	

?>	
