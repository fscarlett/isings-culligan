<?php
/**
 * Template Name: No Sidebar
 *
 * @package Isings_Culligan
 */

get_header();
?>

	<div class="page-content-wrapper container">
		<div class="row">
			<!-- <aside class="col-sm-4">

				<?php // get_sidebar(); ?>
					
			</aside> -->

			<div id="primary" class="content-area col-sm-12">
				
				<main id="main" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->

			</div><!-- #primary --> 

		</div>

	</div>

	<?php get_template_part('template-parts/section-blog-with-solution'); ?>


<?php
get_footer();
