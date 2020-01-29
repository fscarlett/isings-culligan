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
						<button class="get-pricing-button">Get Pricing</button>
					</div>

					<div class="info-wrapper">
						

						<div class="overview"><?php the_field('overview'); ?></div>
						<div class="overview"><?php the_field('specifications'); ?></div>
						<div class="overview"><?php the_field('faq'); ?></div>

						<div class="accordion" id="accordionExample">
						  <div class="card">
						    <div class="card-header" id="headingOne">
						      <h2 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Collapsible Group Item #1
						        </button>
						      </h2>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingTwo">
						      <h2 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Collapsible Group Item #2
						        </button>
						      </h2>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingThree">
						      <h2 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Collapsible Group Item #3
						        </button>
						      </h2>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
						    </div>
						  </div>
						</div>

						
					</div>


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
