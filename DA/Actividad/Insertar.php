<?php
	require ("../DA/Conexion.php");

	function insertarActividad($actividad){
		$conn = Conectar();
		$idUsuario = 116440889;
		$id = 0;
		$statement = $conn->prepare("CALL ACTIVIDAD_INSERTAR(?,?,?,?,?,?,?,?,?,?)");
		$statement->bind_param("isssssiiii", $id,$actividad['nombre'],$actividad['region'], $actividad['proposito'], $actividad['requisito'], $actividad['detalle'], $actividad['cantidadPersona'], $actividad['cantidadTotal'], $actividad['idCategoria'], $idUsuario);
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