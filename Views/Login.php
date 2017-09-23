<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include ("../Assets/header.php");?>
	<title>EvPlan | Registrarse</title>
</head>
<body>
	<header>
		<h1>Inicia sesión</h1>
	</header>
	<div class="container">
		<hr /><br />		
		<form method="POST" action="../Process/Login.php">
			<input class="form-control" type="text" name="username" id="username" placeholder="Username"><br />
			<input class="form-control" type="password" name="pass" id="pass" placeholder="Password"><br />
			<input type="hidden" name="action" id="action" value="registro" /> 
			<button type="submit" class="btn btn-success">Enviar</button>
			<a class="btn btn-primary" href="javascript:void(0);" onclick="window.location = '../index.php'">Regresar</a>
		</form>
	</div>
</body>
</html>