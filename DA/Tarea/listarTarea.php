<?php 
	require ("../../DA/Conexion.php");

	function listarTareas($idtarea){
		$conn = Conectar();
		
		$resultado = $conn->query(" SELECT idTarea, Nombre, Detalle, Estado, Requisitos, Cantidad, Total, Actividad_idActividad FROM tarea WHERE Actividad_idActividad = '$idtarea'");

		$subTarea = $resultado->fetch_all(MYSQLI_ASSOC);

		return $subTarea;
	}

?>	
