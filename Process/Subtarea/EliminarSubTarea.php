<?php 
	include ('../../DA/Subtarea/Eliminar.php');

	$id = $_POST['id'];
	$result = eliminarSubtarea($id);
	
?>