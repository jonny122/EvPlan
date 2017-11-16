<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>EvPlan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- <link rel="shortcut icon" href="images/favicon.ico"> -->
    <link rel="shortcut icon" href="./Images/Tareas.png">
	<!-- CSS -->
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
    
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
    
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
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
		
	</script>
	
</head>
<body>

<!-- PRELOADER -->
<img id="preloader" src="./Images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page">
	
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
								<li><a href="login">Inicia sesión</a></li>
								<li><a href="registro">Registrate</a></li>
							</ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
		
		<!-- HOME -->
		<section id="home" class="padbot0">
				
			<!-- TOP SLIDER -->
			<div class="flexslider top_slider">
				<ul class="slides">
					<li class="slide1">
						<div class="flex_caption1">
							<p class="title1 captionDelay2 FromTop">Agenda</p>
							<p class="title2 captionDelay4 FromTop">y organiza</p>
							<p class="title3 captionDelay6 FromTop">tus actividades</p>
							<p class="title4 captionDelay7 FromBottom">con EvPlan</p>
						</div>
					</li>
						<!-- <a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a> -->
					<li class="slide2">
						<div class="flex_caption1">
							<p class="title1 captionDelay6 FromLeft">EvPlan</p>
							<p class="title2 captionDelay4 FromLeft">como tu</p>
							<p class="title3 captionDelay2 FromLeft">mejor opción</p>
							<p class="title4 captionDelay7 FromLeft">para organizar tus actividades</p>
						</div>
						<!-- <a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a> -->
					</li>
					<li class="slide3">
						<div class="flex_caption1">
							<p class="title1 captionDelay1 FromBottom">Lo mismo</p>
							<p class="title2 captionDelay2 FromBottom">Sucede</p>
							<p class="title3 captionDelay3 FromBottom">Aquí</p>
							<p class="title4 captionDelay5 FromBottom">Se me agotaron las ideas :'(</p>
						</div>
						<!-- <a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a> -->
						
						<!-- VIDEO BACKGROUND -->
						<!-- <a id="P2" class="player" data-property="{videoURL:'tDvBwPzJ7dY',containment:'.top_slider .slide3',autoPlay:true, mute:true, startAt:0, opacity:1}" ></a> -->
						<!-- //VIDEO BACKGROUND -->
					</li>
				</ul>
			</div>
			<div id="carousel">
				<ul class="slides">
					<li><img src="./Images/slider/slide1_bg.jpg" alt="" /></li>
					<li><img src="./Images/slider/slide2_bg.jpg" alt="" /></li>
					<li><img src="./Images/slider/slide3_bg.jpg" alt="" /></li>
				</ul>
			</div><!-- //TOP SLIDER -->
		</section><!-- //HOME -->
		
		
		<!-- ABOUT -->
		<section id="about">
			
			<!-- SERVICES -->
			<div class="services_block padbot40" data-appear-top-offset="-200" data-animated="fadeInUp">
				
				<!-- CONTAINER -->
				<div class="container">
				
					<!-- ROW -->
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Crea</b> tu actividad</p>
								<!--<span>Quality and very comfortable design, does not hurt the eyes and pleasant to use.</span>-->
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Controla</b> las tareas</p>
								<!--<span>Quality and unique design that meets all the requirements and trends of modern web design.</span>-->
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Reduce</b> el desorden</p>
								<!--<span>Design that will be equally beautifully displayed on all your devices, tablet, smartphone or computer.</span>-->
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Ahorra</b> tiempo & dinero</p>
								<!--<span>Hour and great support template. You can always ask a question and we will help you.</span>-->
							</a>
						</div>
					</div><!-- //ROW -->
				</div><!-- //CONTAINER -->
			</div><!-- //SERVICES -->
			
			<!-- CLEAN CODE -->
			<div class="cleancode_block">
				
				<!-- CONTAINER -->
				<center>
				<div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">
					
					<!-- CASTOM TAB -->
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active clearfix" id="tab1">
							<p class="title"><b>Crea</b> tu actividad</p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab2">
							<p class="title"><b>Controla</b> las tareas</p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab3">
							<p class="title"><b>Reduce</b> el desorden</p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab4">
							<p class="title"><b>Ahorra</b> tiempo & dinero</p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<!-- <div class="tab-pane fade clearfix" id="tab5">
							<p class="title"><b>Quality</b></p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab6">
							<p class="title"><b>Support</b></p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div> -->
					</div>
					<ul id="myTab" class="nav nav-tabs">
						<li class="active"><a class="i5" href="#tab1" data-toggle="tab" ><i></i><span>Crea tu actividad</span></a></li>
						<!-- <li><a class="i2" href="#tab2" data-toggle="tab" ><i></i><span>Support</span></a></li> -->
						<li><a class="i5" href="#tab2" data-toggle="tab" ><i></i><span>Controla las tareas</span></a></li>
						<li><a class="i5" href="#tab3" data-toggle="tab" ><i></i><span>Reduce el desorden</span></a></li>
						<li><a class="i5" href="#tab4" data-toggle="tab" ><i></i><span>Ahorra tiempo & dinero</span></a></li>
						<!-- <li><a class="i5" href="#tab5" data-toggle="tab" ><i></i><span>Quality</span></a></li> -->
						<!-- <li><a class="i6" href="#tab6" data-toggle="tab" ><i></i><span>Support</span></a></li> -->
					</ul><!-- CASTOM TAB -->
				</div><!-- //CONTAINER -->
			</center>
			</div><!-- //CLEAN CODE -->
			
		</section><!-- //ABOUT -->	
		
	</div><!-- //PAGE -->
	
	<!-- CONTACTS -->
	<section id="contacts">
	</section><!-- //CONTACTS -->
	
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
							<form id="contact-form-face" class="clearfix" method="POST" action="Process/Usuario.php">
								<!--<input type="text" name="name" value="Name" onFocus="if (this.value == 'Name') this.value = '';" onBlur="if (this.value == '') this.value = 'Name';" />
								<textarea name="message" onFocus="if (this.value == 'Message') this.value = '';" onBlur="if (this.value == '') this.value = 'Message';">Message</textarea>
								<input class="contact_btn" type="submit" value="Send message" />-->
								<input class="form-control" type="text" name="id" id="id" placeholder="Cédula"><br />
								<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre"><br />
								<input class="form-control" type="text" name="apellido1" id="apellido1" placeholder="Apellido1"><br />
								<input class="form-control" type="text" name="apellido2" id="apellido2" placeholder="Apellido2"><br />
								<input class="form-control" type="text" name="correo" id="correo" placeholder="Correo"><br />
								<input class="form-control" type="text" name="telefono" id="telefono" placeholder="Teléfono"><br />
								<input type="hidden" name="action" id="action" value="registro" /> 
								<button type="submit" >Enviar</button>
								<a  href="javascript:void(0);" onclick="window.location = '/EvPlan/'">Regresar</a>
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
		<a class="map_hide" href="javascript:void(0);" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<iframe src="http://maps.google.com/maps?f=q&amp;give%20a%20hand=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;sll=37.0625,-95.677068&amp;sspn=42.631141,90.263672&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;ll=51.500141,-0.126257&amp;spn=0.026448,0.039396&amp;z=14&amp;output=embed" ></iframe>
	</div><!-- //MAP -->

</div>
</body>
</html>
