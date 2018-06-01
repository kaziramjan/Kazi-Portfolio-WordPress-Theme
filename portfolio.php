 <?php/* Template Name: Portfolio Template */ ?>
<?php get_header(); ?>



	<div class="slider">
			<!-- Slide No. ( 3 ) -->			
			<div class="slider-item parallax slide-two">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero-content-wrapper">
								<div class="hero-content">
									<div>
										<h1>Born<br>to be creative</h1>
										<p>I create modern & responsive websites</p>
										<a href="#portfolio" class="scroll-link btn btn-custom reverse dark">My Works</a>
									</div>									
								</div>
							</div>
						</div>
					</div>
				</div>				
			</div>
</div>
<section id="portfolio" class="section text-center">
		<div class="container">
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
					'posts_per_page'	=> -1
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
		</div>
	</section>

<?php while(have_posts()){
	the_post(); ?>
	<?php the_content(); ?>
<?php } ?>	

<?php get_footer(); ?>