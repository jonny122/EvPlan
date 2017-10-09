<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include ("./Assets/header.php");?>
	<title>EvPlan | Subtareas</title>
</head>
<body>
	<header class="col-lg-12">
		<h1>Subtareas para la actividad <?php echo @$_SESSION['tarea'];?> 
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