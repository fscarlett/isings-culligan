<?php
/**
 *
 * @package Isings_Culligan
 */

get_header();
?>

		<div class="page-content-wrapper container">
		<div class="row">

			<div id="primary" class="content-area col-sm-12">
				
				<main id="main" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();
					?>

					<h1><?php the_title(); ?></h1>

					<div class="content-wrapper">

						<?php the_content(); ?>

						<div class="apply-wrapper">
							<a href="/apply?job=<?php the_title(); ?>" class="apply-link">Apply For This Job</a> 
						</div>

					</div>

					<!-- <div class="info-wrapper">
						

						<div class="overview"><?php the_field('overview'); ?></div>
						<div class="overview"><?php the_field('specifications'); ?></div>
						<div class="overview"><?php the_field('faq'); ?></div>

						
					</div> -->


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
