<?php
/**
 * Template Name: solution Recommendation
 *
 * @package Isings_Culligan
 */

get_header();
?>

	<div class="page-content-wrapper container">
		<div class="row">
			<aside class="col-lg-4 ic-sidebar-desk">

				<?php get_sidebar(); ?>
					
			</aside>

			<div id="primary" class="content-area col-lg-8">
				
				<main id="main" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();
					?>

					<h1 class="entry-title"><?php the_title(); ?></h1>

					<?php the_content();

				endwhile; // End of the loop.


			//	echo var_dump($_POST);


				if (
					$_POST['ic_symptom1'] || 
					$_POST['ic_symptom2'] || 
					$_POST['ic_symptom3'] || 
					$_POST['ic_symptom4'] || 
					$_POST['ic_symptom5'] || 
					$_POST['ic_symptom6'] || 
					$_POST['ic_symptom7'] || 
					$_POST['ic_symptom8'] || 
					$_POST['ic_symptom9']  
				 ) {

					$group_A = true;
				}

				if (
					$_POST['ic_symptom11'] || 
					$_POST['ic_symptom12'] || 
					$_POST['ic_symptom13'] || 
					$_POST['ic_symptom14'] || 
					$_POST['ic_symptom15'] || 
					$_POST['ic_symptom16'] || 
					$_POST['ic_symptom17'] || 
					$_POST['ic_symptom18'] || 
					$_POST['ic_symptom19']  ) {

					$group_B = true;
				}

				if (
					$_POST['ic_symptom21'] || 
					$_POST['ic_symptom22'] || 
					$_POST['ic_symptom23'] || 
					$_POST['ic_symptom24'] || 
					$_POST['ic_symptom25'] || 
					$_POST['ic_symptom26'] || 
					$_POST['ic_symptom27'] || 
					$_POST['ic_symptom28'] || 
					$_POST['ic_symptom29']  ) {

					$group_C = true;
				}


				if ( $group_A	) { $solution = 'WS';	} 

				if ( $group_B ) {	$solution = 'RO';	} 

				if ( $group_A && $group_B ) {	$solution = 'WS';	} 

				if ( $group_C ) {	$solution = 'WHF'; } 


				$secondary_product = 'RO';

				if ($solution === 'RO') {
					$secondary_product = 'WS';
				}

				  ?>





			<?php 
			// solution shown
			if ($solution === 'WS') {	?>

				<div class="recommend-wrapper">
					<h2>Water Softener</h2>
				</div>

			<?php	} elseif ($solution === 'RO') {	?>

				<div class="recommend-wrapper">
					<h2>Reverse Osmosis Water Filter</h2>
				</div>

			<?php	} elseif ($solution === 'WHF') {	?>

				<div class="recommend-wrapper">
					<h2>Whole House Water Filter</h2>
				</div>

			<?php	} ?>


			<h3>You may want to consider:</h3>

			<?php 
			// secondary product shown
			if ($secondary_product === 'WS') {	?>

				<div class="recommend-wrapper">
					<h2>Water Softener</h2>
				</div>

			<?php	} elseif ($secondary_product === 'RO') {	?>

				<div class="recommend-wrapper">
					<h2>Reverse Osmosis Water Filter</h2>
				</div>

			<?php	}  
			// echo var_dump( $secondary_product ); ?>




				</main><!-- #main -->

			</div><!-- #primary --> 

		</div>

	</div>

	<?php get_template_part('template-parts/section-blog'); ?>


<?php
get_footer();
