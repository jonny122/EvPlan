<?php
	require ("../DA/Conexion.php");

	function actualizarSubtarea($subtarea){
		$conn = Conectar();
		$statement = $conn->prepare("CALL SUBTAREA_ACTUALIZAR(?,?,?,?,?,?,?,?)");
		$statement->bind_param("isssssiiii", $subtarea['id'],$subtarea['nombre'],$subtarea['detalle'], $subtarea['estado'], $subtarea['requisitos'], $subtarea['cantidad'], $subtarea['total'], $subtarea['idTarea']);
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