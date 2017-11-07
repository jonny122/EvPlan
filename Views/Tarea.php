<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="./Views/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="./Views/css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="./Views/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="./Views/css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./Views/css/owl.carousel.css" rel="stylesheet">
	<link href="./Views/css/style.css" rel="stylesheet" type="text/css" />
    
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
    
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="./Views/js/jquery.min.js" type="text/javascript"></script>
	<script src="./Views/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="./Views/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="./Views/js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="./Views/js/superfish.min.js" type="text/javascript"></script>
	<script src="./Views/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="./Views/js/owl.carousel.js" type="text/javascript"></script>
	<script src="./Views/js/animate.js" type="text/javascript"></script>
	<script src="./Views/js/jquery.BlackAndWhite.js"></script>
	<script src="./Views/js/myscript.js" type="text/javascript"></script>
	<?php require_once "./Utilities/router.php";?>
	<title>EvPlan | Tareas</title>
</head>
<body>
	<header class="col-lg-12">
		<h1>Tareas para la activdad <?php echo @$_SESSION['actividad'];?> 
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
			<select name="idCategoria" id="idCategoria">
				<option disabled value="">Estado</option>
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