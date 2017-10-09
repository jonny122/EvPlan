<?php 
	require ("../DA/Conexion.php");

	function iniciarSesion($usuario, $password){
		$conn = Conectar();
		$statement = $conn->prepare("SELECT Usuario, Rol FROM rolusuario WHERE Usuario = ? and Contrasena = ?");
		$statement->bind_param("ss", $usuario, $password);
		if(($statement->execute()) or die($conn->error)){
			$result = $statement->get_result();
			while ($fila = mysqli_fetch_assoc($result)) {
				$usuario = array('usuario' => $fila['Usuario'], 'rol' => $fila['Rol']);
				return $usuario;
			}
		}
		else{
			return false;
		}	
		$statement->close();
		$conn->close(); 
	}
?>