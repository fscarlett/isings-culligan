<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Isings_Culligan
 */

get_header();
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Page Not Found', 'isings' ); ?></h1>
					<h2 class="offset-heading">Oops! Looking dry in here.</h2>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'isings' ); ?></p>

					<?php
					get_search_form();

					// the_widget( 'WP_Widget_Recent_Posts' );
					?>



				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_template_part('template-parts/section-blog-with-solution'); ?>


<?php
get_footer();
