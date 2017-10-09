<?php
	require ('../DA/Actividad/Insertar.php');
	//require ('../DA/Categoria/CargarCategorias.php');
	if($_POST['action'] == "registro"){
		insertar();
	}elseif($_POST['action'] == "actualizar"){
		actualizar();
	}elseif($_POST['action'] == "eliminar"){
		eliminar();
	}

	function insertar(){

		//$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$region = $_POST['region'];
		$proposito = $_POST['proposito'];
		$requisito = $_POST['requisito'];
		$detalle =	$_POST['detalle'];
		$cantidadPersona =	$_POST['cantidadPersona'];
		$cantidadTotal =	$_POST['cantidadTotal'];
		$idCategoria =	$_POST['idCategoria'];
		$idUsuario =	$_POST['idUsuario'];
	
		$actividad = array('nombre' => $nombre, 'region' => $region, 'proposito' => $proposito, 'requisito' => $requisito, 'detalle' => $detalle, 'cantidadPersona' => $cantidadPersona, 'cantidadTotal' => $cantidadTotal, 'idCategoria' => $idCategoria, 'idUsuario' => $idUsuario); 
		$result = insertarActividad($actividad);
		if($result == true){
			header("Location: ../Views/Tarea.php");
		}
	}

	function actualizar(){
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$region = $_POST['region'];
		$proposito = $_POST['proposito'];
		$requisito = $_POST['requisito'];
		$detalle =	$_POST['detalle'];
		$cantidadPersona =	$_POST['cantidadPersona'];
		$cantidadTotal =	$_POST['cantidadTotal'];
		$idCategoria =	$_POST['idCategoria'];
		$idUsuario =	$_POST['idUsuario'];
	
		$actividad = array('nombre' => $nombre, 'region' => $region, 'proposito' => $proposito, 'requisito' => $requisito, 'detalle' => $detalle, 'cantidadPersona' => $cantidadPersona, 'cantidadTotal' => $cantidadTotal, 'idCategoria' => $idCategoria, 'idUsuario' => $idUsuario); 
		$result = actualizarActividad($actividad);
	}

	function eliminar(){
		$id = $_POST['id'];
		$result = eliminarActividad($id);
	}
	
?>