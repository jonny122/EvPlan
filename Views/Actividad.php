<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include ("./Assets/header.php");?>
	<title>EvPlan | Actividades</title>
</head>
<body>
	<header class="col-lg-12">
		<h1>Registro de Actividades 
			<div style="float: right; font-size: 18px;">
				<img src="./Images/user.jpg" height=40 width=60>
				<a href="javascript:void(0);" id="userMenu"><?php session_start(); echo $_SESSION['user'];?></a>
				<div id="menu" style="display: none;">
					<ul class="list-group">
						<li class="list-group-item"><a href="logout">Cerrar Sesión</a></li>
					</ul>
				</div>
			</div>
		</h1>
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
			<select name="idCategoria" id="idCategoria" class="form-control" placeholder="Seleccione un estado">
				<option value=1>Abierto</option>
				<option value=2>Cerrado</option>
			</select>
			<input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $_SESSION['idUsuario'];?>"><br />
			<input type="hidden" name="action" id="action" value="registro" /> 
			<button type="submit" class="btn btn-success">Enviar</button>
			<a class="btn btn-primary" href="javascript:void(0);" onclick="window.location = '/EvPlan/'">Regresar</a>
		</form>
	</div>
	<script>
		$(document).ready(function(){
			$("#userMenu").click(function(){
		        $("#menu").slideToggle("slow");
		    });
		});
	</script>
</body>
</html>