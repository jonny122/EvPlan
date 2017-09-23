<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include ("../Assets/header.php");?>
	<title>EvPlan | Registrarse</title>
</head>
<body>
	<header>
		<h1>Crear Cuenta</h1>
	</header>
	<div class="container">
		<hr /><br />		
		<form method="POST" action="../Process/RolUsuario.php">
			<input class="form-control" type="text" name="id" id="id" placeholder="Cédula"><br />
			<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre"><br />
			<input class="form-control" type="text" name="passwor" id="passwor" placeholder="passwor"><br />
			<input class="form-control" type="text" name="repetir_contraseña" id="repetir_contraseña" placeholder="Repetir contraseña"><br />
			<select class="form-control" type="text" name="rol" id="rol">
			  <option value="voluntario">Voluntario</option>
			  <option value="Administrador">Administrador</option>
			</select><br />
			<input type="hidden" name="action" id="action" value="registro" /> 
			<button type="submit" class="btn btn-success">Enviar</button>
			<a class="btn btn-primary" href="javascript:void(0);" onclick="window.location = '../index.php'">Regresar</a>
		</form>
	</div>
</body>
</html>