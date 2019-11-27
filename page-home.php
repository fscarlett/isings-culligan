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



		<?php get_template_part('template-parts/section-blog-with-solution'); ?>

		<?php
			// get_template_part( 'template-parts/content', 'page' );
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
