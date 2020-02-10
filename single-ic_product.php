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

			<div id="primary" class="content-area col-xl-8 order-xl-2 order-1">
				
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

					<div class="pricing-button-wrapper">
						<button class="get-pricing-button product-modal-trigger">Get Pricing</button>
					</div>

					<?php get_template_part('template-parts/section-product-modal'); ?>

					<div class="info-wrapper">
						

						<div class="overview"><?php the_field('overview'); ?></div>
						<div class="overview"><?php the_field('specifications'); ?></div>
						<!-- <div class="overview"><?php // the_field('faq'); ?></div> -->


						<div class="faq-wrapper">

							<?php $faq_number = 0; ?>

							<?php	if( have_rows('faqs') ):   ?>

								<h2>Frequently Asked Questions</h2>

								<div class="accordion" id="faqAccordion">

									<?php while ( have_rows('faqs') ) : the_row(); ?>

										<?php $faq_number += 1; ?>

										<div class="card">
									    <div class="card-header" id="heading<?php echo $faq_number; ?>">
									      <h3 class="mb-0">
									        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $faq_number; ?>" aria-expanded="false" aria-controls="collapse<?php echo $faq_number; ?>">
									          <?php the_sub_field('question'); ?>
									        </button>
									      </h3>
									    </div>

									    <div id="collapse<?php echo $faq_number; ?>" class="collapse" aria-labelledby="heading<?php echo $faq_number; ?>" data-parent="#faqAccordion">
									      <div class="card-body">
									        <?php the_sub_field('answer'); ?>
									      </div>
									    </div>
									  </div>

									<?php endwhile; ?>

								</div>

							<?php else :

							    // no rows found

							endif;
							?>

						</div>  <!-- faq-wrapper -->

					</div> <!-- info-wrapper -->


				<?php
				endwhile; // End of the loop.  
				?>

				</main><!-- #main -->

			</div><!-- #primary --> 

		</div>

	</div>

	<?php get_template_part('template-parts/section-blog-with-solution'); ?>

<?php
// get_sidebar();
get_footer();
