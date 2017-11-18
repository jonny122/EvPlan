<?php
	require ("../../DA/Conexion.php");

	function actualizarActividad($actividad){
		$conn = Conectar();
		$statement = $conn->prepare("CALL ACTIVIDAD_ACTUALIZAR(?,?,?,?,?,?,?,?,?,?)");
		$statement->bind_param("isssssiiii", $actividad['id'],$actividad['nombre'],$actividad['region'], $actividad['proposito'], $actividad['requisito'], $actividad['detalle'], $actividad['cantidadPersona'], $actividad['cantidadTotal'], $actividad['idCategoria'], $actividad['idUsuario']);
		if(($statement->execute()) or die($conn->error)){
			print_r($actividad);
			return true;
		}
		else{
			return false;
		}	
		$statement->close();
		$conn->close(); 
	}
	
?>