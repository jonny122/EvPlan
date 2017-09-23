<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include ("../Assets/header.php");?>
	<title>EvPlan | Actividades</title>
</head>
<body>
	<header>
		<h1>Registro de Actividades</h1>
	</header>
	<div class="container">
		<hr /><br />
		<form method="POST" action="../Process/Actividad.php">
			<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre"><br />
			<input class="form-control" type="text" name="region" id="region" placeholder="Región"><br />
			<input class="form-control" type="text" name="proposito" id="proposito" placeholder="Porpósito"><br />
			<input class="form-control" type="text" name="requisito" id="requisito" placeholder="Requisito"><br />
			<input class="form-control" type="text" name="detalle" id="detalle" placeholder="Detalle"><br />
			<input class="form-control" type="text" name="cantidadPersona" id="cantidadPersona" placeholder="Cantidad inicial de Personas"><br />
			<input class="form-control" type="text" name="cantidadTotal" id="cantidadTotal" placeholder="Cantidad total de Personas"><br />
			<select name="idCategoria" id="idCategoria">
				<option disabled value="">Estado</option>
				<?php foreach($_SESSION[''] as $elementos){ ?>
				<option value="<?php echo $elementos['id']; ?>"><?php echo $elementos['estado'];?></option>
				<?php }?>
			</select>
			<input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $_SESSION['idUsuario'];?>"><br />
			<input type="hidden" name="action" id="action" value="registro" /> 
			<button type="submit" class="btn btn-success">Enviar</button>
			<a class="btn btn-primary" href="javascript:void(0);" onclick="window.location = '../index.php'">Regresar</a>
		</form>
	</div>
</body>
</html>