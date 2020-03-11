<?php
/**
 * Template Name: Page with Get Pricing Modal
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

			<div id="primary" class="content-area col-xl-8 order-xl-2 order-1">
				
				<main id="main" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' ); 
				?>

					<div class="pricing-button-wrapper">
						<button class="get-pricing-button product-modal-trigger">Get Pricing</button>
					</div>

					<?php get_template_part('template-parts/section-product-modal'); ?>

				<?php
				endwhile; // End of the loop.
				?>

				</main><!-- #main -->

			</div><!-- #primary --> 

		</div>

	</div>

	<?php get_template_part('template-parts/section-blog-with-solution'); ?>


<?php
get_footer();
