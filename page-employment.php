<?php
/**
 * Template Name: Employment
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

				<p><?php the_content(); ?></p>

				<div class="jobs-wrapper">
	        <div class="jobs">

          <?php 

			      $ic_job_args = array(
			        'post_type'       => 'ic_opening',
			        'order'           => 'DESC',
			        'posts_per_page'  => '-1',
			        );

			      $ic_jobs = new WP_Query( $ic_job_args );

			      if ( $ic_jobs->have_posts() ) {

			        while ( $ic_jobs->have_posts() ) {

			          $ic_jobs->the_post();

			          ?>

			          <div class="job-card">
			            <h2 class="job-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			            <p><?php the_excerpt(); ?></p>
			          </div>
			          
			        <?php
			        } // endwhile for jobs

			      } else {
			        echo '<p>No jobs have been found.</p>';
			      }; 

			      wp_reset_postdata();

			    ?> 

        </div>
      </div>


				<?php 
				endwhile; // End of the loop.
				?>

				</main><!-- #main -->

			</div><!-- #primary --> 

		</div>

	</div>

	<?php // get_template_part('template-parts/section-blog-with-solution'); ?>


<?php
get_footer();
