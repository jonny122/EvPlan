<?php 
	require ("../../DA/Conexion.php");

	function listarSubTareas($idtarea){
		$conn = Conectar();
		
		$resultado = $conn->query("SELECT idSubTarea,Nombre,Detalle,Estado,Requisitos,Cantidad,Total,Tarea_idTarea FROM subtarea WHERE Tarea_idTarea = '$idtarea'");

		$subTarea = $resultado->fetch_all(MYSQLI_ASSOC);

		return $subTarea;
	}
?>	
