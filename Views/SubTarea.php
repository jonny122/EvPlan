<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include ("../Assets/header.php");?>
	<title>EvPlan | Subtareas</title>
</head>
<body>
	<header>
		<h1>Registro de Subtareas</h1>
	</header>
	<div class="container">
		<hr /><br />
		<form method="POST" action="../Process/SubTarea.php">
			<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre"><br />
			<input class="form-control" type="text" name="detalle" id="detalle" placeholder="Detalle"><br />
			<input class="form-control" type="text" name="estado" id="estado" placeholder="Estado"><br />
			<input class="form-control" type="text" name="requisitos" id="requisitos" placeholder="Requisitos"><br />
			<input class="form-control" type="text" name="cantidad" id="cantidad" placeholder="Cantidad"><br />
			<input class="form-control" type="text" name="total" id="total" placeholder="Total"><br />
			<input class="form-control" type="text" name="idTarea" id="idTarea" placeholder="idTarea"><br />
			<input type="hidden" name="action" id="action" value="registro" /> 
			<button type="submit" class="btn btn-success">Agregar</button>
			<a class="btn btn-primary" href="javascript:void(0);" onclick="window.location = '../index.php'">Regresar</a>
		</form>
	</div>
</body>
</html>