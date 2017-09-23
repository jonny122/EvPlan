<?php
	require ('../DA/Usuario/Insertar.php');

	if($_POST['action'] == "registro"){
		insertar();
	}elseif($_POST['action'] == "actualizar"){
		actualizar();
	}elseif($_POST['action'] == "eliminar"){
		eliminar();
	}
    

	function insertar(){

		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$apellido1 = $_POST['apellido1'];
		$apellido2 = $_POST['apellido2'];
		$correo = $_POST['correo'];
		$telefono =	$_POST['telefono'];
		$usuario = array('id' => $id, 'nombre' => $nombre, 'apellido1' => $apellido1, 'apellido2' => $apellido2, 'correo' => $correo, 'telefono' => $telefono); 
		$result = insertarUsuario($usuario);
		if($result == true){
			header("Location: ../Views/RolUsuario.php");
		}
	}

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

	function eliminar(){
		$id = $_POST['id'];
		$result = eliminarUsuario($usuario);
	}
	
?>