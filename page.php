<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Isings_Culligan
 */

get_header();
?>

	<div class="container page-content-wrapper">
		<div class="row">
			<aside class="col-sm-4">
				
				<?php get_sidebar(); ?>
					
			</aside>

			<div id="primary" class="content-area">
				
				<main id="main" class="site-main col-sm-8">

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

		<?php get_template_part('template-parts/section-blog-with-solution'); ?>

	</div>

<?php
get_footer();
