<?php 
include ('../../DA/Tarea/Eliminar.php');
	
		$id = $_POST['id'];
		$result = eliminarTarea($id);
	
 ?>