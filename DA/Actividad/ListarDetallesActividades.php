<?php 
	require ("../../DA/Conexion.php");

	function listarDetalleActividades($idActividad){
		$conn = Conectar();
		
		$resultado = $conn->query("SELECT a.idActividad,a.Nombre,a.Region,a.Proposito,a.Requisito,a.Detalle,a.Cantidad_Persona,a.Cantidad_Total,a.Categoria_idCategoria,a.Usuario_idUsuario, c.Estado FROM actividad as a, categoria as c WHERE idActividad = '$idActividad' and c.idCategoria = a.Categoria_idCategoria");

		$detalles = $resultado->fetch_all(MYSQLI_ASSOC);

		return $detalles;
	}
?>	
