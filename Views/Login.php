<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php require_once ("./Assets/header.php");?>
	<title>EvPlan | Inicio de sesión</title>
</head>
<body>
	<header>
		<h1>Inicia sesión</h1>
	</header>
	<div class="container">
		<hr /><br />		
		<form method="POST" action="./Process/Login.php">
			<input class="form-control" type="text" name="username" id="username" placeholder="Username"><br />
			<input class="form-control" type="password" name="pass" id="pass" placeholder="Password"><br /> 
			<button type="submit" class="btn btn-success">Enviar</button>
			<a class="btn btn-primary" href="javascript:void(0);" onclick="window.location = '/EvPlan/'">Regresar</a>
		</form>
	</div>
</body>
</html>