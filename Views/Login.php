<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="./Views/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="./Views/css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="./Views/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="./Views/css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./Views/css/owl.carousel.css" rel="stylesheet">
	<!--<link href="./Views/css/style.css" rel="stylesheet" type="text/css" />-->
    
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
	<title>EvPlan | Inicio de sesión</title>
</head>
<body style="background-image:url(./Images/slider/slide2_bg.jpg);">
	<header>
		<h1 id="mainTitle">Inicia sesión</h1>
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
	<script>
		$(document).ready(function(){
			$("#mainTitle").css("color", "white");
		});
	</script>
</body>
</html>