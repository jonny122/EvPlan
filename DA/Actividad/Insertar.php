<?php
	require ("../DA/Conexion.php");

	function insertarActividad($actividad){
		$conn = Conectar();
		$statement = $conn->prepare("CALL ACTIVIDAD_INSERTAR(?,?,?,?,?,?,?,?,?,?)");
		$statement->bind_param("isssssiiii", 0,$actividad['nombre'],$actividad['region'], $actividad['proposito'], $actividad['requisito'], $actividad['detalle'], $actividad['cantidadPersona'], $actividad['cantidadTotal'], $actividad['idCategoria'], $actividad['idUsuario']);
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