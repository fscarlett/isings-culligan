<?php
/**
 * Template Name: Resources Page
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

					<h1>Resources</h1>

					<div class="row"> 
						
						<?php 

							$ic_resource_args = array(
			        'post_type'       => 'ic_resource',
			        'order'           => 'DESC',
			        'posts_per_page'  => '-1',
			        );

				      $ic_resource = new WP_Query( $ic_resource_args );


				      if ( $ic_resource->have_posts() ) {

				        while ( $ic_resource->have_posts() ) {

				          $ic_resource->the_post();

				          ?>

					          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ic-blog-column">
						          <a href="<?php the_permalink(); ?>" class="ic-blog-card">
												<div class="ic-home-blog-img-wrapper">
													<?php the_post_thumbnail('medium'); ?>
												</div>
												<div class="ic-home-blog-copy-card">
													<h3><?php the_title(); ?></h3> 

														<?php the_excerpt(''); ?>

													<a href="<?php the_permalink(); ?>" class="btn ic-button">Read More</a>
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

				</main><!-- #main -->

			</div><!-- #primary --> 

		</div>

	</div>

	<?php get_template_part('template-parts/section-solution'); ?>


<?php
get_footer();
