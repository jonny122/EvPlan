<?php session_set_cookie_params(0,"/");
session_start(); 
if(!isset($_SESSION['idUsuario'])){
	header('location: login');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>EvPlan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="images/Tareas.png">
    
	<!-- CSS -->
	<link href="./Views/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="./Views/css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="./Views/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="./Views/css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./Views/css/owl.carousel.css" rel="stylesheet">
	<link href="./Views/css/style.css" rel="stylesheet" type="text/css" />
	<link href="./Views/css/colors/" rel="stylesheet" type="text/css" id="colors" />
    
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
	<script src="./Views/js/owl.carousel.js"></script>
	<script src="./Views/js/animate.js" type="text/javascript"></script>
	<script src="./Views/js/jquery.BlackAndWhite.js"></script>
	<script src="./Views/js/myscript.js" type="text/javascript"></script>
		<script>
		
		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
		
		//BlackAndWhite
		$(window).load(function(){
			$('.client_img').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height 
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});

		
		$(document).on('click', '#btnModi',function(){	
			var id = $(this).val();
			$("input[name='id']").val(id);
			var id1 = $("input[name='id']").val();//no
			$("#formActividad").submit();
		});
	</script>

</head>
<body>

<!-- PRELOADER -->
<img id="preloader" src="images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page" class="single_page">
	
		<!-- HEADER -->
		<header>
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="index" ><span class="b1">E</span><span class="b2">v</span><span class="b3">P</span><span class="b4">l</span><span class="b5">a</span><span class="b5">n</span></a>
					</div><!-- //LOGO -->
					
					<!-- SEARCH FORM -->
					<div id="search-form" class="pull-right">
						<form method="get" action="#">
							<input type="text" name="Search" value="Search" onFocus="if (this.value == 'Search') this.value = '';" onBlur="if (this.value == '') this.value = 'Search';" />
						</form>
					</div><!-- SEARCH FORM -->
					
					<!-- MENU -->
					<div class="pull-right">
						<nav class="navmenu center">
							<ul>
								<li class="first active scroll_btn">
									<a href="javascript:void(0);" id="userMenu"><img src="./Images/user.jpg" height="60" width="40" alt=""><?php echo @$_SESSION['user'];?></a>
								</li>
								<!-- <li class="scroll_btn"><a href="#about" >Acerca de EvPlan</a></li> -->
								<!-- <li ><a href="#projects">Projects</a></li> -->
								<!-- <li class="scroll_btn last"><a href="#contacts" >Contactos</a></li> -->
							</ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
		
		<!-- BREADCRUMBS -->
		<section class="breadcrumbs_block clearfix parallax">
			<div class="container center">
				<h2><b>Actividades</b> recientes</h2>
				<p>Descubre cuales actividades fueron publicadas recientemente.</p>
			</div>
		</section><!-- //BREADCRUMBS -->
		
<!-- AQUI EMPIEZAN LAS ACTIVIDADES PUBLICADAS -->

<!-- PROJECTS -->
		<section id="projects" class="padbot20">
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Actividades</b></h2>
				<button class="btn btn-success" id="btnAgregar" type="button"  data-toggle="modal" data-target="#addActividad" style="border-radius: 25px; width: 80px; height: 55px;"><span class="fa fa-plus fa-2x" style="color: white; size: 70px; margin-top: -25px;"></span> &nbsp;</button><br />
			</div><!-- //CONTAINER -->
			<div class="projects-wrapper container" data-appear-top-offset="-200" data-animated="fadeInUp">
				<!-- PROJECTS SLIDER -->
				<div class="owl-demo owl-carousel projects_slider">
					<!--Actividades-->
					<?php
					require ('./Views/../Process/Actividad/ListarActividades.php');

					$acti = listar($_SESSION["idUsuario"]);
						foreach ($acti as $elementos) { ?>
							<div class='item'>
								<div class='work_item'>
									<div class='work_img'>
						  				<center><img src='images/actividad1.png' width='130' height='130' alt=''></center>
						  			</div>
									<div class='card-block'>
										<h4 class='card-title'>Actividad: <?php echo $elementos["Nombre"]; ?></h4>
										<p class='card-text'>Región: <?php echo $elementos["Region"]; ?></p>
									</div>
									<div class='work_description'>
										<div class='work_descr_cont'>
											<form action="./Process/Actividad/ListarDetalleActividades.php" method="post" id="formActividad">
												<input type="hidden" name="id" id="id" value="">
											</form>
											<button style="color: black;" value="<?php echo $elementos["idActividad"] ?>" id="btnModi" class='btn btn-primary'>Ver detalles</button>
										</div>
									</div>  						
								</div>
							</div>
					<?php } ?>
				</div><!-- //PROJECTS SLIDER -->
			</div>
			
			
			<!-- OUR CLIENTS -->
			<div class="our_clients">
				<!-- CONTAINER -->
				<div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">
					<!-- ROW -->
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/1.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/2.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/3.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/4.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/5.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/6.jpg" alt="" />
						</div>
					</div><!-- //ROW -->
				</div><!-- CONTAINER -->
			</div><!-- //OUR CLIENTS -->
		</section><!-- //PROJECTS -->

<!-- AQUI TERMINAN LAS ACTIVIDADES PUBLICADAS -->
		
	</div><!-- //PAGE -->

	
	<!-- CONTACTS -->
	<!-- <section id="contacts">
	</section> --><!-- //CONTACTS -->
	
	<!-- FOOTER -->
	<footer>
		<!-- CONTAINER -->
		<div class="container">
			<!-- ROW -->
			<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
				<div class="col-lg-4 col-md-4 col-sm-6 padbot30 foot_about_block">
					<h4><b>About</b> us</h4>
					<p>We value people over profits, quality over quantity, and keeping it real. As such, we deliver an unmatched working relationship with our clients.</p>
					<p>Our team is intentionally small, eclectic, and skilled; with our in-house expertise, we provide sharp and</p>
					<ul class="social">
						<li><a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-facebook"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-pinterest-square"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="map_show fa fa-map-marker"></i></a></li>
					</ul>
				</div>
				<div class="respond_clear"></div>
				<div class="col-lg-4 col-md-4 padbot30">
					<h4><b>Contacts</b> Us</h4>
					<!-- CONTACT FORM -->
					<div class="span9 contact_form">
						<div id="note"></div>
						<div id="fields">
							<form id="contact-form-face" class="clearfix" action="#">
								<input type="text" name="name" value="Name" onFocus="if (this.value == 'Name') this.value = '';" onBlur="if (this.value == '') this.value = 'Name';" />
								<textarea name="message" onFocus="if (this.value == 'Message') this.value = '';" onBlur="if (this.value == '') this.value = 'Message';">Message</textarea>
								<input class="contact_btn" type="submit" value="Send message" />
							</form>
						</div>
					</div><!-- //CONTACT FORM -->
				</div>
			</div><!-- //ROW -->
			<div class="row copyright">
				<div class="col-lg-12 text-center">
				
				 <p>Crafted with <i class="fa fa-heart"></i>, <a href="http://designscrazed.org/" >Designscrazed</a></p>
				</div>
			</div><!-- //ROW -->
		</div><!-- //CONTAINER -->
	</footer><!-- //FOOTER -->
	<!-- MAP -->
	<div id="map">
		<a class="map_hide" href="javascript:void(0);"><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<iframe src="http://maps.google.com/maps?f=q&amp;give%20a%20hand=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;sll=37.0625,-95.677068&amp;sspn=42.631141,90.263672&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;ll=51.500141,-0.126257&amp;spn=0.026448,0.039396&amp;z=14&amp;output=embed" ></iframe>
	</div><!-- //MAP -->
</div>
<!--Modales -->
<div class="modal fade" id="addActividad" role="dialog">
    <div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Agrega tú nueva actividad</h4>
	        </div>
	        <div class="modal-body">
	        	<style>
	        		form input{
	        			border-style: none; !important
	        		}
	        	</style>
	        	<form method="POST" action="./Process/Actividad/InsertarActividad.php">
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
	        </div>
	        <div class="modal-footer">
				<button type="submit" class="btn btn-success" style="width: 90px; height: 65px; color: white;">Enviar</button>
	        	<button type="button" class="btn btn-default" data-dismiss="modal" style="width: 90px; height: 65px; color: white; background-color: gray;">Cerrar</button>
	        </div>
	        </form>
	    </div>
    </div>
</div>
</body>
</html>