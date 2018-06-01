<?php
// Slider shortcode
add_shortcode('home-slider','home_slider');
function home_slider(){
	ob_start();
	?>

	<div class="slider">
			<!-- Slide No. ( 1 ) -->
			<?php 
			$slider = new WP_Query(array(
				'post_type'			=> 'kazi-slider',
				'posts_per_page'	=> -1
				));
			while($slider->have_posts()){
				$slider->the_post(); ?>

			<div class="slider-item parallax slide-one">

				
		
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero-content-wrapper">
								<div class="hero-content">

									<?php $content_position = get_post_meta(get_the_id(),'_content-position',true); ?>
									<div class=" <?php if($content_position == 'center'){
										echo 'text-center';

									}   ?> ">
										<?php the_content(); ?>
										<?php 
										$button_text 	= get_post_meta(get_the_id(),'_button-text',true);
										$button_url 	= get_post_meta(get_the_id(),'_button-url',true);
										$button_color 	= get_post_meta(get_the_id(),'_button-color',true);

										?>
										<a href="<?php echo $button_url; ?>" class="scroll-link btn <?php if($button_color == 'light'){
											echo 'btn-custom reverse light';
										}
										if($button_color == 'default'){
											echo 'btn-custom';

										}
										else{
											echo 'btn-custom reverse dark';
										} ?>"><?php echo $button_text; ?></a>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php	}
			 ?>		
			
			
		</div>



	</div>

	
<?php 
return ob_get_clean();
}

//about me shortcode
add_shortcode('about-me', 'about_me');
function about_me($attr, $content = null){
	$attributes = extract(  shortcode_atts(array(
		'image'				=> '',
		'name'				=> 'Kazi Ramjan',
		'tagline'			=> 'Web Developer',
		'nationality'		=> 'Bangladeshi',
		'date_of_birth'		=> '21-01-1995',
		'e_mail'			=> 'kaziramjana@gmail.com',
		'website'			=> 'http://www.kazi-ramjan.com',
		'phone'				=> '+8801686809581',
		'skype'				=> '1686809581',
		'about_me_content'	=> 'Hello, <br> I am Kazi Ramjan, Front-End Developer with 3 years of experience rapidiously productize wireless results.',

		'why_me_content'	=> 'Assertively target cooperative experiences whereas tactical total linkage. Intrinsicly transition end-to-end synergy via low-risk high-yield internal or "organic" sources. Assertively synergize dynamic scenarios through user friendly services. Seamlessly communicate.',

		'vision_content'	=> 'Seamlessly administrate team building opportunities after sustainable portals. Phosfluorescently incentivize cost effective action items without innovative meta-services. Globally monetize backward-compatible portals and performance based bandwidth. Distinctively underwhelm cost effective.'
		),$attr));

ob_start(); ?>

	<!-- Start About Me Section -->
	<section id="about" class="section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="profile-intro text-center">
						<div class="profile-img-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
							<?php  $showimage= wp_get_attachment_image_src($image); ?>
						<img class="img-responsive img-circle" src="<?php echo $showimage[0]; ?>" alt="profile">
					</div>
					<h2><?php echo $name; ?></h2>
					<div class="separator centered"></div>
					<p class="title"><?php echo $tagline; ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- My Personal Info -->
				<div class="profile text-center col-sm-5 col-sm-push-7">
					<div class="wow fadeInRight" data-wow-duration="1s" data-wow-offset="200">
						<h4>Personal Info</h4>
						<div class="separator centered"></div>
						<p class="para"><span class="highlight">My Name:</span> <?php echo $name; ?></p>
						<p class="para"><span class="highlight">Nationality:</span> <?php echo $nationality; ?></p>
						<p class="para"><span class="highlight">Date Of Birth:</span> <?php echo $date_of_birth; ?></p>
						<p class="para"><span class="highlight">E-mail:</span> <a href="mailto:admin@prema.com"><?php echo $e_mail; ?></a></p>
						<p class="para"><span class="highlight">Website:</span> <a href="<?php echo $website; ?>"><?php echo $website; ?></a></p>
						<p class="para"><span class="highlight">My Phone:</span> <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
						<p class="para"><span class="highlight">Skype:</span> <a href="tel:<?php echo $skype; ?>"><?php echo $skype; ?></a></p>
					</div>
				</div>
				<div class="info-tabs col-sm-7 col-sm-pull-5 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="200">
					<!-- Tabs Nav -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#about-me-panel" aria-controls="about-me-panel" role="tab" data-toggle="tab">About Me</a>
						</li>
						<li role="presentation">
							<a href="#why-me-panel" aria-controls="why-me-panel" role="tab" data-toggle="tab">Why Me</a>
						</li>
						<li role="presentation">
							<a href="#my-vision-panel" aria-controls="my-vision-panel" role="tab" data-toggle="tab">My Vision</a>
						</li>
					</ul>
					<!-- Tabs Panel -->
					<div class="tab-content">
						<!-- About Me Panel -->
						<div role="tabpanel" class="tab-pane fade in active" id="about-me-panel">
							<h4>About Me</h4>
							<div class="separator"></div>
							<p class="para"><span></span></p>
							<p class="para"><?php echo $about_me_content; ?></p>
						</div>
						<!-- Why Me Panel -->
						<div role="tabpanel" class="tab-pane fade" id="why-me-panel">
							<h4>Why to choose me</h4>
							<div class="separator"></div>
							<p class="para"><?php echo $why_me_content; ?></p>
							</p>
						</div>
						<!-- My Vision Panel -->
						<div role="tabpanel" class="tab-pane fade" id="my-vision-panel">
							<h4>Here is My Vision</h4>
							<div class="separator"></div>
							<p class="para"><?php echo $vision_content; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Me Section -->



	<?php return ob_get_clean();
}

// Ready section

add_shortcode('ready-section','ready_section');
function ready_section($attr, $content = null){
	 $attributes = extract(  shortcode_atts(array(
	'title'					=> 'I\'m Ready For your Projects. Hire Me Now',
	'first_button'			=> 'Contact me',
	'first_button_link'		=> '#contact',
	'second_button'			=> 'My resume',
	'second_button_link'	=> '#'

		),$attr));
	ob_start(); ?>

	<!-- Start Ready Section -->
	<section id="ready" class="section text-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-offset="200"><?php echo $title; ?></h3>
					<a href="<?php echo $first_button_link; ?>" class="wow fadeInUp scroll-link btn btn-custom light outline-white" data-wow-duration="1s" data-wow-offset="200"><?php echo $first_button; ?></a>
					<a href="<?php echo $second_button_link; ?>" class="wow fadeInUp btn btn-custom dark outline-white"  data-wow-duration="1s" data-wow-offset="200" data-wow-delay="0.2s"><i class="fa fa-download"></i> <?php echo $second_button; ?></a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Ready Section -->

<?php return ob_get_clean();
}


//funfact section
add_shortcode('funfact-section','funfact_section');
function funfact_section($attr, $content = null){
	$attributes = extract(  shortcode_atts(array(
		'title'					=> 'fun facts',
		'subtitle'				=> 'Synergistically create extensive intellectual capital rather than clicks-and-mortar materials.',
		'projects_done_number'	=> '215',
		'projects_done_icon'	=> 'fa fa-tasks',

		'happy_clients_number'	=> '650',
		'happy_clients_icon'	=> 'fa fa-users',

		'hours_worked_number'	=> '3475',
		'hours_worked_icon'	=> 'fa fa-clock-o',

		'cup_of_coffee_number'	=> '215',
		'cup_of_coffee_icon'	=> 'fa fa-coffee'

		),$attr));
	ob_start(); ?>
	<!-- Start Fun Facts Section -->
	<section id="fun-facts" class="section text-center">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-intro">
						<h2><?php echo $title; ?></h2>
						<div class="separator centered"></div>
						<p class="para"><?php echo $subtitle; ?></p>
					</div>
				</div>	
			</div>
			<div class="row">
			<!-- Fact No. ( 1 ) -->
				<div class="fact col-md-3 col-sm-6">
					<i class="<?php echo $projects_done_icon; ?>"></i>
					<span class="timer" data-from="0" data-to="<?php echo $projects_done_number; ?>" data-speed="3000" data-refresh-interval="50"></span>
					<div class="separator centered"></div>
					<p>projects done</p>
				</div>
				<!-- Fact No. ( 2 ) -->
				<div class="fact col-md-3 col-sm-6">
					<i class="<?php echo $happy_clients_icon; ?>"></i>
					<span class="timer" data-from="0" data-to="<?php echo $happy_clients_number; ?>" data-speed="3000" data-refresh-interval="50"></span>
					<div class="separator centered"></div>
					<p>happy clients</p>
				</div>
				<!-- Fact No. ( 3 ) -->
				<div class="fact col-md-3 col-sm-6">
					<i class="<?php echo $hours_worked_icon; ?>"></i>
					<span class="timer" data-from="0" data-to="<?php echo $hours_worked_number; ?>" data-speed="3000" data-refresh-interval="50"></span>
					<div class="separator centered"></div>
					<p>hours worked</p>
				</div>
				<!-- Fact No. ( 4 ) -->
				<div class="fact col-md-3 col-sm-6">
					<i class="<?php echo $cup_of_coffee_icon; ?>"></i>
					<span class="timer" data-from="0" data-to="<?php echo $cup_of_coffee_number; ?>" data-speed="3000" data-refresh-interval="50"></span>
					<div class="separator centered"></div>
					<p>cups of coffee</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End Fun Facts Section -->

<?php return ob_get_clean();
}


//services section
add_shortcode('services-section','services_section');
function services_section($attr, $content = null){
	$attributes = extract(  shortcode_atts(array(
		'title'		=> 'what can i do',
		'subtitle'	=> 'Continually transform process-centric systems rather than compelling growth strategies. Energistically streamline low-risk high-yield supply chains via scalable intellectual capital.'



		),$attr));
	ob_start(); ?>

	<!-- Start Services Section -->
	<section id="services" class="section text-center">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-intro">
						<h2><?php echo $title; ?></h2>
						<div class="separator centered"></div>
						<p class="para"><?php echo $subtitle; ?></p>
					</div>
				</div>
			</div>
			<div class="row">

				<?php

				$service = new WP_Query(array(
					'post_type'			=> 'kazi-services',
        			'posts_per_page'	=> -1
					));
				while($service->have_posts()){
					$service->the_post(); ?>

					<!-- Service No. ( 1 ) -->
				<div class="service col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
					<i class="<?php echo get_post_meta(get_the_id(),'_service-icon', true); ?>"></i>
					<h4><?php echo the_title(); ?></h4>
					<p class="para"><?php echo get_post_meta(get_the_id(),'_service-content', true); ?></p>
				</div>

			<?php	}

				 ?>
			
			</div>
		</div>
	</section>
	<!-- End Services Section -->

<?php return ob_get_clean();
}

//quote section
add_shortcode('quote-section','quote_section');
function quote_section($attr, $content){
	$attributes = extract( shortcode_atts(array(

		'title'		=> 'Do You Like My Services?',
		'subtitle'	=> 'Completely orchestrate 24/365 information before best-of-breed core competencies. Collaboratively unleash customized functionalities.',
		'button_text'	=> 'Hire me now',
		'button_link'	=> '#contact'

		),$attr));
	ob_start(); ?>
	<!-- Start Quote Section -->
	<section id="quote" class="section">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div class="section-intro">
						<h2><?php echo $title; ?></h2>
						<div class="separator centered"></div>
						<p class="para"><?php echo $subtitle; ?></p>						
					</div>

					<a href="<?php echo $button_link; ?>" class="wow bounceIn scroll-link btn btn-custom reverse dark" data-wow-duration="0.6s" data-wow-offset="200"><?php echo $button_text; ?></a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Quote Section -->

<?php return ob_get_clean();
}


//experiences section
add_shortcode('experiences-section','experiences_section');
function experiences_section($attr, $content = null){
	$attributes = extract( shortcode_atts(array(
		'title'		=> 'My Experiences',
		'subtitle'	=> 'Objectively cultivate equity invested customer service without intermandated methodologies. Intrinsicly productivate interactive strategic theme areas via goal-oriented.'
		),$attr));
	ob_start(); ?>

	<!-- Start Experiences Section -->
	<section id="experiences" class="section text-center">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-intro">
						<h2><?php echo $title; ?></h2>
						<div class="separator centered"></div>
						<p class="para"><?php echo $subtitle; ?></p>
					</div>
				</div>
			</div>
			<!-- Start Timeline -->
			<div class="timeline-wrapper">
				<div class="timeline">
					<?php 
					$experinces = new WP_Query(array(

						'post_type'			=> 'kazi-experience',
	        			'posts_per_page'	=> -1
						));
					while($experinces->have_posts()){
						$experinces->the_post(); 
						 $year 		= get_post_meta(get_the_id(),'_job-year',true); 
						 $icon 		= get_post_meta(get_the_id(),'_job-icon',true);
						 $job_title = get_post_meta(get_the_id(),'_job-title',true);

						?>

						<!-- Event ( 1 ) -->
					<div class="event row">
						<div class="col-sm-3 col-xs-12 event-left wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
							<h4><?php echo $year; ?></h4>
							<i class="<?php echo $icon; ?>"></i>
						</div>
						<div class="col-sm-9 col-xs-12 event-right wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
							<div class="content-wrapper">
								<h4><?php echo the_title(); ?></h4>
								<div class="separator"></div>
								<p class="job-title"><?php echo $job_title; ?></p>
								<p class="para"><?php echo get_post_meta(get_the_id(),'_job-content',true); ?></p>
							</div>	
						</div>
					</div>
				<?php	}
					?>
			</div>
			</div> <!-- End Timeline -->
		</div>
	</section>
	<!-- End Experiences Section -->

<?php return ob_get_clean();
}


//skills section
add_shortcode('skills-section','skills_section');
function skills_section($attr, $content = null){
	extract(  shortcode_atts(array(
		'title'		=> 'my powerful skills',
		'subtitle'	=> 'Continually transform process-centric systems rather than compelling growth strategies. Energistically streamline low-risk high-yield supply chains via scalable intellectual capital. Dramatically benchmark customer.'

		),$attr));
	ob_start(); ?>
	<!-- Start Skills Section -->
	<section id="skills" class="section text-center">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-intro">
						<h2><?php echo $title; ?></h2>
						<div class="separator centered"></div>
						<p class="para"><?php echo $subtitle; ?></p>
					</div>
				</div>
			</div>
			<div class="row">

				<?php 
				$skills = new WP_Query(array(
					'post_type'			=> 'kazi-skills',
	        		'posts_per_page'	=> -1
					));
				while($skills->have_posts()){
					$skills->the_post(); 
					$percent = get_post_meta(get_the_id(),'_skill-percentage',true); 

					?>

					<!-- Skill No. ( 1 ) -->
				<div class="skill col-md-4 col-sm-6">
					<div class="chart" data-percent="<?php echo $percent; ?>">
						<span class="skill-timer" data-from="0" data-to="<?php echo $percent; ?>" data-speed="1500"></span>
						<span class="percent">%</span>
					</div>
					<h3><?php echo the_title(); ?></h3>
					<p class="para"><?php echo the_content(); ?></p>
				</div>

			<?php	}

				 ?>
			

			</div>
		</div>
	</section>
	<!-- End Skills Section -->

<?php return ob_get_clean();
}


//portfolio section
add_shortcode('portfolio-section','portfolio_section');
function portfolio_section($attr, $content = null){
	$attributes = extract(  shortcode_atts(array(
		'title'					=> 'Check out my works',
		'subtitle'				=> 'Intrinsicly conceptualize real-time information without cross functional potentialities. Conveniently impact integrated benefits and ubiquitous paradigms. Dynamically architect.',
		'buttonn'		=> 'See more',
		'buttonn_link'	=> '#'

		),$attr));
	ob_start(); ?>
	<!-- Start Portfolio Section -->
	<section id="portfolio" class="section text-center">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-intro">
						<h2><?php echo $title; ?></h2>
						<div class="separator centered"></div>
						<p class="para"><?php echo $subtitle; ?></p>
					</div>
				</div>
			</div>
			<div class="controls">
				<button class="filter btn btn-custom" data-filter="all" data-toggle="tooltip" data-placement="top" title="">All</button>
				<?php 
				$terms=get_terms('portfolio-category');
				foreach($terms as $term){ ?>

				<button class="filter btn btn-custom" data-filter=".<?php echo $term->slug ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $term->count; ?>"><?php echo $term->name; ?></button>

			<?php	}
				 ?>

			</div>
			<div id="Container" class="row">
				<!-- Project 1 -->
				<?php
				$portfolio = new WP_Query(array(
					'post_type'			=> 'kazi-portfolios',
					'posts_per_page'	=> 6
					));
				while($portfolio->have_posts()){
					$portfolio->the_post(); ?>

					<div class="mix <?php $terms= get_the_terms(get_the_id(),'portfolio-category');

                        foreach($terms as $term){

                          echo $term->slug. " ";

                        }
                         ?> col-md-4 col-sm-6 col-xs-12" data-my-order="1">
					<div class="project" data-toggle="modal" data-target="#modal">
						<div class="project-img-wrapper">
							<?php the_post_thumbnail('', array('class' => 'center-block img-responsive thumbnail')); ?>						
						</div>
						<div class="img-overlay">
							<div class="overlay-text">
								<h4><?php echo the_title(); ?></h4>
								<p><?php $terms= get_the_terms(get_the_id(),'portfolio-category');

                        foreach($terms as $term){

                          echo $term->slug. "	";

                        }
                         ?></p><br>
                         <p><?php 
                         	$second_button_text  = get_post_meta(get_the_id(),'_second-button-text',true);
							$second_button_link  = get_post_meta(get_the_id(),'_second-button-link',true);
					        $second_button_color = get_post_meta(get_the_id(),'_second-button-color',true);
					        ?>

					        <a href="<?php echo $second_button_link; ?>" target="_blank" class="btn btn-custom <?php if($second_button_color == 'light'){
					        	echo 'btn-custom-reverse';
					        }else{
					        	echo 'dark scroll-link';
					        } ?>"><?php echo $second_button_text; ?></a></p>
							</div>
						</div>
					</div>	
					<!-- Modal -->
					 <!-- End Modal -->
				</div>

			<?php	}

				 ?>
			</div>
			<div class="row">
				<div class="col-xs-12 interested">
					<a href="<?php echo $buttonn_link; ?>" class="btn btn-custom dark wow bounceIn" data-wow-duration="0.6s" data-wow-offset="200"><?php echo $buttonn; ?></a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Portfolio Section -->

<?php return ob_get_clean();
}


//marketplace section
add_shortcode('marketplace-section','marketplace_section');
function marketplace_section($attr, $content=null){
	$attributes = extract(  shortcode_atts(array(
		'title'			=> 'Hire me on!',
		),$attr));
	ob_start(); ?>
<!-- Start marketplace Section -->
	<section id="clients" class="section text-center">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-intro wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
						<h2><?php echo $title; ?></h2>
						<div class="separator centered"></div>				
					</div>
				</div>
			</div>
			<div class="row">
				<div class="client-list">
					<?php $marketplace=new WP_Query(array(
						'post_type'			=> 'kazi-marketplace',
						'posts_per_page'	=> 8
					)); 
					while($marketplace->have_posts()){
						$marketplace->the_post(); ?>

				
					<!-- Client No. 1 -->
					<div class="col-md-3 col-sm-6">
						<div class="client wow bounceIn" data-wow-duration="0.6s" data-wow-offset="100">
							<a href="<?php echo get_post_meta(get_the_id(),'_marketplace-link', true); ?>"><?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?></a> 
						</div> 
					</div>
					<?php	} ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End marketplace Section -->
	<?php return ob_get_clean();
}


//contact section
add_shortcode( 'contact-section','contact_section' );
function contact_section($attr, $content=null){
	$attributes= extract(  shortcode_atts(array(
		'my_place'		=> 'Savar, Dhaka<br>Bangladesh',
		'call_me'		=> '(+880)1686809581  <br> (+880)1778094008',
		'send_message'	=> 'kaziramjana@gmail.com',
		'work_time'		=> 'As Needed - Open',
		'contact_form'	=> '[contact-form-7 id="298" title="Contact me"]'

		),$attr));
	ob_start(); ?>
<div id="contact" class="section text-center">
		<div class="container">
			<div class="overlay"></div>
			<div class="row">
				<div class="col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-offset="200">
					<div class="section-intro">
						<h2>Keep in touch</h2>
						<div class="separator centered"></div>
						<p class="para">Here you can find me. I'd like to hear from you all. You can hire me, ask me about anything or buy me coffee.</p>
					</div>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="row">
						<div class="col-sm-6 col-xs-12 call-info wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
							<div class="info-wrapper">
								<i class="fa fa-home fa-fw"></i>
								<h4>My Place</h4>
								<p class="para"><?php echo $my_place; ?></p>
							</div>	
						</div>
						<div class="col-sm-6 col-xs-12 call-info wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
							<div class="info-wrapper">
								<i class="fa fa-phone fa-fw"></i>
								<h4>Call Me</h4>
								<p class="para"><?php echo $call_me; ?></p>
							</div>	
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-xs-12 call-info wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
							<div class="info-wrapper">
								<i class="fa fa-envelope-o fa-fw"></i>
								<h4>Send Message</h4>
								<p class="para"><?php echo $send_message; ?></p>
							</div>	
						</div>
						<div class="col-sm-6 col-xs-12 call-info wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
							<div class="info-wrapper">
								<i class="fa fa-clock-o fa-fw"></i>
								<h4>Work Time</h4>
								<p class="para"><?php echo $work_time; ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
					<!-- Start Contact Form -->
					<?php echo do_shortcode($contact_form); ?>  <!-- End Contact Form -->
					<div class="form-response">&nbsp;</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 social-wrapper wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100">
					<h4>follow me here :</h4>
					<!-- Follow Me Social Links -->
					<div class="social-links">
						<a href="<?php global $kazi; echo $kazi['facebook-link']; ?>" class="icon fb"></a> <!-- Facebook Link -->
						<a href="<?php global $kazi; echo $kazi['instagram-link']; ?>" class="icon ig"></a> <!-- Instagram Link -->
						<a href="<?php global $kazi; echo $kazi['twitter-link']; ?>" class="icon tw"></a> <!-- Twitter Link -->
						<a href="<?php global $kazi; echo $kazi['github-link']; ?>" class="icon gh"></a> <!-- Github Link -->
						<a href="<?php global $kazi; echo $kazi['linkedIn-link']; ?>" class="icon li"></a> <!-- Linkedin Link -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php return ob_get_clean();
}

