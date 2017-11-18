<?php 
	include ('../../DA/Subtarea/Eliminar.php');
	include ('../../DA/Subtarea/listarSubTareas.php');
	session_start();
	$id = $_POST['id'];


	$result = eliminarSubtarea($id);
	$_SESSION["listarDetalleSubTarea"] = listarSubTareas(1);
	
?>