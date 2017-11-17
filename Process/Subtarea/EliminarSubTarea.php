<?php 
	include ('../../DA/Subtarea/Eliminar.php');

	$id = $_POST['id'];
	$result = eliminarSubtarea($id);
	if($result==true){
		include ('../../DA/Subtarea/Eliminar.php');
		listarSubTarea($id)
	}
?>