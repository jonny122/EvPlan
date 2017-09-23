<?php
	require ('../DA/Rol/Insertar.php');

	if($_POST['action'] == "registro"){
		insertar();
	}elseif($_POST['action'] == "actualizar"){
		actualizar();
	}elseif($_POST['action'] == "eliminar"){
		eliminar();
	}
    

	function insertar(){
		$rol = $_POST['rol'];
		$nombre = $_POST['nombre'];
		$id = $_POST['id'];
		$passwor = $_POST['passwor'];
		$cuenta = array('rol' => $rol, 'nombre' => $nombre, 'passwor' => $passwor, 'id' => $id); 
		$result = insertarCuenta($cuenta);
		if($result == true){
			header("Location: ../Views/Usuario.php");
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