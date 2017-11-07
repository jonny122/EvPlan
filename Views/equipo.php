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
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/colors/" rel="stylesheet" type="text/css" id="colors" />
    
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
    
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="js/superfish.min.js" type="text/javascript"></script>
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/animate.js" type="text/javascript"></script>
	<script src="js/jquery.BlackAndWhite.js"></script>
	<script src="js/myscript.js" type="text/javascript"></script>
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
						<a href="index.html" ><span class="b1">E</span><span class="b2">v</span><span class="b3">P</span><span class="b4">l</span><span class="b5">a</span><span class="b5">n</span></a>
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
								<li><a href="index.html#home">Inicio</a></li>
								<!-- <li class="first active scroll_btn"><a href="#home" >Inicio</a></li> -->
								<!-- <li class="scroll_btn"><a href="#about" >Acerca de EvPlan</a></li> -->
								<li><a href="index.html#about">Acerca de EvPlan</a></li>
								<!-- <li ><a href="#projects">Projects</a></li> -->
								<li ><a href="actividades.html">Actividades</a></li>
								<li ><a href="equipo.html">Nuestro equipo</a></li>
								<li ><a href="blanco.html">Blanco</a></li>
								<li ><a href="contactos.html">Contactos</a></li>
								<!-- <li class="scroll_btn last"><a href="#contacts" >Contactos</a></li> -->
								<li class="sub-menu">
									<a href="javascript:void(0);" >Pages</a>
									<ul>
										<li><a href="blog.html" >Blog</a></li>
										<li><a href="blog-post.html" >Blog Post</a></li>
										<li><a href="portfolio-post.html" >Portfolio Single Work</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
		
		<!-- BREADCRUMBS -->
		<section class="breadcrumbs_block clearfix parallax">
			<div class="container center">
				<h2><b>Nuestro</b> equipo</h2>
				<p>A continuación, te presentamos nuestro equipo de trabajo.</p>
			</div>
		</section><!-- //BREADCRUMBS -->
		
<!-- AQUI EMPIEZA NUESTRO EQUIPO -->
<!-- TEAM -->
		<!-- <section id="team" class="padbot20"> -->
		<section id="team" class="padbot20">
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Nuestro</b> equipo</h2>
			</div>
				<!-- ROW -->
				<!-- <div class="row" data-appear-top-offset="-200" data-animated="fadeInUp"> -->
				<div class="projects-wrapper container" data-appear-top-offset="-200" data-animated="fadeInUp">
					<!-- TEAM SLIDER -->
					<!-- <div class="owl-demo owl-carousel team_slider"> -->
					<div class="owl-demo owl-carousel projects_slider">
						<!-- crewman1 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/Karolay.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Karolay Viales Bustos</p>
										<span>Director</span>
									</div>
								</div>
								<div class="crewman_social">
									<!-- <a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a> -->
									<a href="https://www.facebook.com/karolay.vialesbustos" target="_blank"><i class="fa fa-facebook-square"></i></a>
									<!-- <a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a> -->
								</div>
							</div>
						</div><!-- crewman1 -->
						
						<!-- crewman2 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/David.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>David Vargas Díaz</p>
										<span>Manager</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="https://www.facebook.com/david.vargasdiaz" target="_blank"><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div>
						<!-- crewman1 -->
						
						<!-- crewman3 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/Emanuel.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Emanuel Rodríguez Moraga</p>
										<span>Creative Director</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="https://www.facebook.com/emanuel.moraga14" target="_blank"><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div>
						<!-- crewman3 -->
						
						<!-- crewman4 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/Jonny.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Jhonathan Corea Leiva</p>
										<span>Manager</span>
									</div>
								</div>
								   <div class="crewman_social">
									<a href="https://www.facebook.com/jonatan.corealeiva" target="_blank"><i class="fa fa-facebook-square"></i></a>
								    </div>
							</div>
						</div><!-- crewman4 -->
						
						<!-- crewman5 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/Luis.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Luis Adán</p>
										<span>Designer</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="https://www.facebook.com/lgomez1290" target="_blank"><i class="fa fa-facebook-square"></i></a>
								    </div>
							</div>
						</div><!-- crewman5 -->

					</div><!-- TEAM SLIDER -->
				</div><!-- //ROW -->
			<!-- </div> --><!-- //CONTAINER -->
		</section><!-- //TEAM -->

<!-- AQUI NUESTRO EQUIPO-->
		
	</div><!-- //PAGE -->

	
	<!-- CONTACTS -->
	<!-- <section id="contacts">
	</section> --><!-- //CONTACTS -->	
	
	<!-- MAP -->
	<!-- <div id="map">
		<a class="map_hide" href="javascript:void(0);"><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<iframe src="http://maps.google.com/maps?f=q&amp;give%20a%20hand=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;sll=37.0625,-95.677068&amp;sspn=42.631141,90.263672&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;ll=51.500141,-0.126257&amp;spn=0.026448,0.039396&amp;z=14&amp;output=embed" ></iframe>
	</div> --><!-- //MAP -->

</div>
</body>
</html>