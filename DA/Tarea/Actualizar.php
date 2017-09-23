<?php
	require ("../DA/Conexion.php");

	function actualizarTarea($tarea){
		$conn = Conectar();
		$statement = $conn->prepare("CALL TAREA_ACTUALIZAR(?,?,?,?,?,?,?,?)");
		$statement->bind_param("issssiii", $tarea["id"],$tarea['nombre'], $tarea['detalle'], $tarea['estado'], $tarea['requisitos'], $tarea['cantidad'], $tarea['total'], $tarea['idActividad']);
		if(($statement->execute()) or die($conn->error)){
			return true;
		}
		else{
			return false;
		}	
		$statement->close();
		$conn->close(); 
	}
	
?>