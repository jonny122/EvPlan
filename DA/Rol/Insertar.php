<?php
	require ("../DA/Conexion.php");

	function insertarCuenta($cuenta){
		$conn = Conectar();
		$statement = $conn->prepare("CALL ROLUSUARIO_INSERTAR(?,?,?,?)");
		$statement->bind_param("sssi", $cuenta['rol'],$cuenta['nombre'], $cuenta['passwor'], $cuenta['id']);
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