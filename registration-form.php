 <?php /*Template Name: Registration Form */ ?>
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

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>id="top-page" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="70">

	<!-- Start Loading Page -->
	<div class="loading">
		<div class="loading-wrapper">
			<div class="loader"></div>
			<h4>Form Loading</h4>
		</div>
	</div>

<div class="container">
  
  

    
<fieldset class="well form-horizontal">

<!-- Form Name -->


<div class="foo">
  <span class="letter" data-letter="Skill">Skill</span>
  <span class="letter" data-letter="Development">Development</span>
  <span class="letter" data-letter="Registration">Registration</span>
  <span class="letter" data-letter="Form">Form</span>
  <span class="letter" data-letter="|">|</span>
  <span class="letter" data-letter="C.S.E">C.S.E</span>
</div>

<!-- Text input-->



  <?php while(have_posts()){
	the_post();

	the_content();

} ?>

</fieldset>

</div>
    <!-- /.container -->

<!-- Start Footer Section -->

	<footer>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<p class="para">Designed & Developed with <i class="fa fa-heart"></i> by <a href="http://kazi-ramjan.com/">Kazi Ramjan</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer Section -->

	<!-- Start To Top Button -->
	<div id="toTop">
		<div class="top-button">
			<i class="fa fa-angle-up"></i>
		</div>
	</div>
	<!-- End To Top Button -->

	<?php wp_footer(); ?>
</body>


</html>