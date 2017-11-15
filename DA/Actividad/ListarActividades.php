<?php 
	require ("./Actividad/../DA/Conexion.php");

	function listarActividades($idUsuario){
		$conn = Conectar();
		
		$resultado = $conn->query("SELECT idActividad,Nombre,Region FROM actividad WHERE Usuario_idUsuario = '$idUsuario'");

		$actividades = $resultado->fetch_all(MYSQLI_ASSOC);

		return $actividades;
	}
?>	
