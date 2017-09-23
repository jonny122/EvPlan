<?php
	require ("../DA/Conexion.php");

	function actualizarUsuario($usuario){
		$conn = Conectar();
		$statement = $conn->prepare("CALL USUARIO_ACTUALIZAR(?,?,?,?,?,?)");
		$statement->bind_param("isssss", $usuario["id"],$usuario['nombre'], $usuario['apellido1'], $usuario['apellido2'], $usuario['correo'], $usuario['telefono']);
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