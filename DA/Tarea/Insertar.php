<?php
	require ("../DA/Conexion.php");

	function insertarTarea($usuario){
		$conn = Conectar();
		$statement = $conn->prepare("CALL TAREA_INSERTAR(?,?,?,?,?,?,?,?)");
		$statement->bind_param("issssiii", 0,$tarea['nombre'], $tarea['detalle'], $tarea['estado'], $tarea['requisitos'], $tarea['cantidad'], $tarea['total'], $tarea['idActividad']);
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