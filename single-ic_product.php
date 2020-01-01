<?php
/**
 *
 * @package Isings_Culligan
 */

get_header();
?>

		<div class="page-content-wrapper container">
		<div class="row">
			<aside class="col-lg-4 ic-sidebar-desk">

				<?php get_sidebar(); ?>
					
			</aside>

			<div id="primary" class="content-area col-lg-8">
				
				<main id="main" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();
					?>

					<h1><?php the_title(); ?></h1>

					<div class="row">

						<div class="content-wrapper col-sm-9">
							
							<?php the_content(); ?>

						</div>

						<div class="col-sm-3">
							<?php echo get_the_post_thumbnail(); ?>
						</div>

					</div>

					<div class="info-wrapper">
						

						<div class="overview"><?php the_field('overview'); ?></div>
						<div class="overview"><?php the_field('specifications'); ?></div>
						<div class="overview"><?php the_field('faq'); ?></div>

						
					</div>


				<?php
				endwhile; // End of the loop.
				?>

				</main><!-- #main -->

			</div><!-- #primary --> 

		</div>

	</div>

<?php
// get_sidebar();
get_footer();
