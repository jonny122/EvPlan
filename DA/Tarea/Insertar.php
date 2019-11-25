<?php
	require ("../../DA/Conexion.php");

	function insertarTarea($tarea){
		$conn = Conectar();
		$id=1;
		$statement = $conn->prepare("CALL TAREA_INSERTAR(?,?,?,?,?,?,?,?)");
		$statement->bind_param("isssiiis", $id,$tarea['nombre'], $tarea['estado'], $tarea['requisitos'], $tarea['cantidad'], $tarea['total'], $tarea['idActividad'], $tarea['detalle']);
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