<?php 
	include ('../../DA/Actividad/Eliminar.php');

	$id = $_POST['id'];

	$result = eliminarActividad($id);

?>