<?php
	require ("../DA/Conexion.php");

	function eliminarUsuario($id){
		$conn = Conectar();
		$statement = $conn->prepare("CALL USUARIO_ELIMINAR(?)");
		$statement->bind_param("i", $id);
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