<?php
	
	$url = (isset($_GET['url'])) ? $_GET['url'] : "/EvPlan/";

	switch ($url) {
		case '/EvPlan/':
			require "./Views/Index.php";
			break;
		case 'login':
			require "./Views/Login.php";
			break;
		case 'logout':
			require "./Process/CerrarSesion.php";
			break;
		case 'registro':
			require "./Views/Registrarse.php";
			break;
		case 'actividad':
			require "./Views/Actividad.php";
			break;
		case 'tarea':
			require "./Views/Tarea.php";
			break;
		case 'subtarea':
			require "./Views/SubTarea.php";
			break;
		case 'crearCuenta':
			require "./Views/RolUsuario.php";
			break;
		default:
			require "./Views/Index.php";
			break;
	}

?>