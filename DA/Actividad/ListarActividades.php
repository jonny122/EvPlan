<?php 
	require ("./Actividad/../DA/Conexion.php");

	function listarActividades($idUsuario){
		$conn = Conectar();
		
		$resultado = $conn->query("SELECT idActividad,Nombre,Region,Proposito,Requisito,Detalle,Cantidad_Persona,Cantidad_Total,Categoria_idCategoria,Usuario_idUsuario FROM actividad WHERE Usuario_idUsuario = '$idUsuario'");

		$actividades = $resultado->fetch_all(MYSQLI_ASSOC);

		return $actividades;
	}
?>	
