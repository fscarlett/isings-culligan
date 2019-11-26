<?php
/**
 * Template Name: Home
 *
 * @package Isings_Culligan
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
		?>

		<div class="hero-wrapper" style="background-image: url(<?php home_url(); ?>/wp-content/uploads/2019/11/baby_sink_sink_with_dad.jpg);">
			<div class="hero-container container">
				<h1>You could give your people Culligan Water</h1>
			</div>
		</div>

		<section class="home-cta-section">
			<div class="home-cta-container container">
				<div class="row">

					<div class="col-md-4 home-cta-card">

						<?php 
							$callout_1 = get_field('home_cta_section_1');
							if ($callout_1) { 
						 ?>

						 <div class="home-cta-image-wrapper">	
								<img src="<?php echo $callout_1['image']; ?>" alt="">
						</div>
						<h2><?php echo $callout_1['heading']; ?></h2>
						<p><?php echo $callout_1['copy']; ?></p>

						<a href="<?php echo $callout_1['link']; ?>" class="btn home-cta-button">Find Out More</a>


						<?php } else { ?>

							<div class="home-cta-image-wrapper">					
						</div>
						<h2>Diagnose Your Water</h2>
						<p>Lorem ipsum dolor sit amet, ut qui suas sed, per.</p>

						<a href="#" class="btn home-cta-button">Find Out More</a>

						<?php } ?>

					</div>

					<div class="col-md-4 home-cta-card">

						<?php 
							$callout_2 = get_field('home_cta_section_2');
							if ($callout_2) { 
						 ?>

						 <div class="home-cta-image-wrapper">	
								<img src="<?php echo $callout_2['image']; ?>" alt="">
						</div>
						<h2><?php echo $callout_2['heading']; ?></h2>
						<p><?php echo $callout_2['copy']; ?></p>

						<a href="<?php echo $callout_2['link']; ?>" class="btn home-cta-button">Find Out More</a>


						<?php } else { ?>

							<div class="home-cta-image-wrapper">					
						</div>
						<h2>Customer Service</h2>
						<p>Lorem ipsum dolor sit amet, ut qui suas meis mnesarchum, te sea illud .</p>

						<a href="#" class="btn home-cta-button">Find Out More</a>

						<?php } ?>

					</div>

					<div class="col-md-4 home-cta-card">

						<?php 
							$callout_3 = get_field('home_cta_section_3');
							if ($callout_3) { 
						 ?>

						 <div class="home-cta-image-wrapper">	
								<img src="<?php echo $callout_3['image']; ?>" alt="">
						</div>
						<h2><?php echo $callout_3['heading']; ?></h2>
						<p><?php echo $callout_3['copy']; ?></p>

						<a href="<?php echo $callout_3['link']; ?>" class="btn home-cta-button">Find Out More</a>


						<?php } else { ?>

							<div class="home-cta-image-wrapper">					
						</div>
						<h2>Fre In-Home Water Test</h2>
						<p>Lorem ipsum dolor sit amet, ut qui suas meis mnesarchum, te sea .</p>

						<a href="#" class="btn home-cta-button">Find Out More</a>

						<?php } ?>

					</div>

					
				</div>





				<?php // the_content(); ?>
			</div>
		</section>

		<section class="home-water-solution-section">
			<div class="solution-gradient">
				<img src="<?php home_url(); ?>/wp-content/uploads/2019/11/sarah-water-home-compressor.png" alt="Flowing water" class="water-graphic-home">
			</div>
			<div class="water-solution-container container">
				<div class="row">
					<div class="col-sm-6">
						<h2 class="offset-heading">Find Your Water Solution</h2>
						<p class="offset-heading">Ising's Culligan of Stockton can solve your water problems. <br> Identify your problem, then click to find your solution.</p>
						<a href="<?php home_url(); ?>/solution-center" class="btn ic-button blue-button offset-heading">Find Your Solution</a>
						
					</div>

				</div>	
			</div>
			
		</section>

		<section class="home-blog-section">


			<div class="blog-section-container container">

				<h2 class="offset-heading">Water News</h2>

				<div class="row">
					
					<?php 

					// $ic_tag = get_field('blog_tag');
					// $ic_tag_slug = $ic_tag->slug;

						$ic_blog_args = array(
							// 'tag' 						=> $ic_tag_slug,
			        'order'           => 'DESC',
			        'posts_per_page'  => '3',
			        );

			      $ic_blog = new WP_Query( $ic_blog_args );


			      if ( $ic_blog->have_posts() ) {

			        while ( $ic_blog->have_posts() ) {

			          $ic_blog->the_post();

			          ?>

				          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					          <a href="<?php the_permalink(); ?>" class="ic-blog-card">
											<div class="ic-home-blog-img-wrapper">
												<?php the_post_thumbnail('medium'); ?>
												<!-- <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt=""> -->
											</div>
											<div class="ic-home-blog-copy-card">
												<h3><?php the_title(); ?></h3> 
													<!-- <p class="ic-post-date"><?php  $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></p> -->
													<!-- <p><?php the_tags(); ?></p> -->

													<?php the_excerpt(''); ?>

												<a href="<?php the_permalink(); ?>" class="btn ic-button">Learn More</a>
												<!-- <a href="<?php the_permalink(); ?>" class="custom-button-link"><button class="custom-button ic-button ic-blog-btn">Read Article</button></a> -->
											</div>
										</a>
									</div>

			        <?php
			        } // endwhile 

			      } else {
			        echo '<p>No posts have been found.</p>';
			      }; 

			      wp_reset_postdata();

			    ?> 

				</div>
			</div>
		</section>

		<?php
			// get_template_part( 'template-parts/content', 'page' );
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
