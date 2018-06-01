<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons Links -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#f7465b">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon.ico">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#0c7cd5">
  	<meta name="google-site-verification" content="PYGtAvf9AFydytS6-9z0qZAUX7cThHU9rmzXiTMTxpI" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>id="top-page" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="70">

	<!-- Start Loading Page -->
	<div class="loading">
		<div class="loading-wrapper">
			<div class="loader"></div>
			<h4><?php  global $kazi; echo $kazi['preloader-text']; ?></h4>
		</div>
	</div>
	<!-- End Loading Page --> 


	<!-- Start Color-Box Switcher -->
	
	<!-- End Color-Box Switcher -->
	<!-- start Home Section -->
	<div id="home" class="fs-slider-hero">
		<!-- <div class="overlay"></div> -->
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<!-- Start container -->
			<div class="container">
				<!-- Logo and toggle  -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collaps" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Start Logo -->
			  		<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php global $kazi; echo $kazi['logo-first-section']; ?><span class="colored-brand"><?php global $kazi; echo $kazi['logo-second-section']; ?></span></a>
			  		<!-- End Logo -->
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-collaps">
					<ul class="nav navbar-nav navbar-right">
						<li class="active">
							<a class="scroll-link" href="<?php echo home_url(); ?>">Home</a>
						</li>
						<li>
							<a class="scroll-link" href="#about">About</a>
						</li>
						<li>
							<a class="scroll-link" href="#services">Services</a>
						</li>
						<li>
							<a class="scroll-link" href="#experiences">Experiences</a>
						</li>
						<li>
							<a class="scroll-link" href="#skills">Skills</a>
						</li>
						<li>
							<a class="scroll-link" href="#portfolio">Portfolio</a>
						</li>
						<li>
							<a class="scroll-link" href="#contact">Contact</a>
						</li>												
					</ul>
				</div>   <!-- /.navbar-collapse --> 
			</div>   <!-- End container -->
		</nav>   <!-- End Navigation -->



		
	<!-- End Home Section -->