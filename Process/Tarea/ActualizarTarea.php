<?php  
	function actualizar(){
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$apellido1 = $_POST['apellido1'];
		$apellido2 = $_POST['apellido2'];
		$correo = $_POST['correo'];
		$telefono =	$_POST['telefono'];
		$usuario = array('id' => $id, 'nombre' => $nombre, 'apellido1' => $apellido1, 'apellido2' => $apellido2, 'correo' => $correo, 'telefono' => $telefono); 
		$result = actualizarUsuario($usuario);
	}

?>	
