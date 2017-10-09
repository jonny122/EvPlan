<?php
	require ('../DA/Subtarea/Insertar.php');

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
		$detalle = $_POST['detalle'];
		$estado = $_POST['estado'];
		$requisitos = $_POST['requisitos'];
		$cantidad =	$_POST['cantidad'];
		$total =	$_POST['total'];
		$idTarea =	$_POST['idTarea'];
	
		$subtarea = array('nombre' => $nombre, 'detalle' => $detalle, 'estado' => $estado, 'requisitos' => $requisitos, 'cantidad' => $cantidad, 'total' => $total, 'idTarea' => $idTarea); 
		$result = insertarSubtarea($subtarea);
		if($result == true){
			//header("Location: ../Views/Login.php");
		}
	}

	function actualizar(){
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$detalle = $_POST['detalle'];
		$estado = $_POST['estado'];
		$requisitos = $_POST['requisitos'];
		$cantidad =	$_POST['cantidad'];
		$total =	$_POST['total'];
		$idTarea =	$_POST['idTarea'];
	
	
		$subtarea = array('nombre' => $nombre, 'detalle' => $detalle, 'estado' => $estado, 'requisitos' => $requisitos, 'cantidad' => $cantidad, 'total' => $total, 'idTarea' => $idTarea); 
		$result = actualizarSubtarea($subtarea);
	}

	function eliminar(){
		$id = $_POST['id'];
		$result = eliminarSubtarea($id);
	}
	
?>