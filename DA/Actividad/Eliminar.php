<?php
	require ("../../DA/Conexion.php");

	function eliminarActividad($id){
		$conn = Conectar();
		$statement = $conn->prepare("CALL ACTIVIDAD_ELIMINAR(?)");
		$statement->bind_param("i", $id);
		if(($statement->execute()) or die($conn->error)){
			print_r($id);
			return true;
		}
		else{
			return false;
		}	
		$statement->close();
		$conn->close(); 
	}
	
?>