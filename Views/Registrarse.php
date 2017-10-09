<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include ("./Assets/header.php");?>
	<title>EvPlan | Registrarse</title>
</head>
<body>
	<header>
		<h1>Registro de usuarios</h1>
	</header>
	<div class="container">
		<hr /><br />		
		<form method="POST" action="../Process/Usuario.php">
			<input class="form-control" type="text" name="id" id="id" placeholder="Cédula"><br />
			<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre"><br />
			<input class="form-control" type="text" name="apellido1" id="apellido1" placeholder="Apellido1"><br />
			<input class="form-control" type="text" name="apellido2" id="apellido2" placeholder="Apellido2"><br />
			<input class="form-control" type="text" name="correo" id="correo" placeholder="Correo"><br />
			<input class="form-control" type="text" name="telefono" id="telefono" placeholder="Teléfono"><br />
			<input type="hidden" name="action" id="action" value="registro" /> 
			<button type="submit" class="btn btn-success">Enviar</button>
			<a class="btn btn-primary" href="javascript:void(0);" onclick="window.location = '/EvPlan/'">Regresar</a>
		</form>
	</div>
</body>
</html>