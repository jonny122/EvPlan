<?php
	require ("../DA/Conexion.php");

	function insertarUsuario($usuario){
		$conn = Conectar();
		$statement = $conn->prepare("CALL USUARIO_INSERTAR(?,?,?,?,?,?)");
		$statement->bind_param("isssss", $usuario['id'],$usuario['nombre'], $usuario['apellido1'], $usuario['apellido2'], $usuario['correo'], $usuario['telefono']);
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