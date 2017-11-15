<?php 
	require ("../../DA/Conexion.php");

	function listarDetalleActividades($idActividad){
		$conn = Conectar();
		
		$resultado = $conn->query("SELECT idActividad,Nombre,Region,Proposito,Requisito,Detalle,Cantidad_Persona,Cantidad_Total,Categoria_idCategoria,Usuario_idUsuario FROM actividad WHERE idActividad = '$idActividad'");

		$detalles = $resultado->fetch_all(MYSQLI_ASSOC);

		return $detalles;
	}
?>	
