<?php 
	include ('../../DA/Subtarea/Eliminar.php');
	include ('../../DA/Subtarea/listarSubTareas.php');

	$id = $_POST['id'];


	$result = eliminarSubtarea($id);
	
?>