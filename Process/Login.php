<?php
	require ('../DA/Rol/IniciarSesion.php');

	$user = $_POST['username'];
	$pass = $_POST['pass'];

	$result = iniciarSesion($user,$pass);

	session_start();
	$_SESSION["idUsuario"] = $result["id"];
	$_SESSION['user'] = $result['usuario'];
	$_SESSION['rol'] = $result['rol'];

	if ($_SESSION['user'] != NULL && $_SESSION['rol'] != NULL) {
		header("Location: /EvPlan/actividad");
	}else{
		header("Location: /EvPlan/login");
	}
?>