<?php
/**
 *
 * @package Isings_Culligan
 */

get_header();
?>

		<div class="page-content-wrapper container">
		<div class="row">
			<aside class="col-xl-4 order-xl-1 order-12">

				<?php get_sidebar(); ?>
					
			</aside>

			<div id="primary" class="content-area col-lg-8">
				
				<main id="main" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();
					?>

					<h1><?php the_title(); ?></h1>

					<div class="content-wrapper">

						<div class="feat-image-wrapper">
							
							<?php echo get_the_post_thumbnail(); ?>
								
						</div>
						
						<?php the_content(); ?>

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
