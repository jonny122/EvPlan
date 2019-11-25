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
			header("Location: /EvPlan/login");
		}
	}

	function actualizar(){
		$rol = $_POST['rol'];
		$nombre = $_POST['nombre'];
		$id = $_POST['id'];
		$passwor = $_POST['passwor'];
		$cuenta = array('rol' => $rol, 'nombre' => $nombre, 'passwor' => $passwor, 'id' => $id); 
		$result = actualizarCuenta($cuenta);
	}

	function eliminar(){
		$id = $_POST['id'];
		$result = eliminarCuenta($cuenta);
	}
	
?>