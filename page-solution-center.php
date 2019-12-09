<?php
/**
 * Template Name: Solution Center
 *
 * @package Isings_Culligan
 */

get_header();
?>

	<div class="page-content-wrapper container">
		<div class="row">
			<aside class="col-sm-4">

				<?php get_sidebar(); ?>
					
			</aside>

			<div id="primary" class="content-area col-sm-8">
				
				<main id="main" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();

					?>

					<h1 class="entry-title"><?php the_title(); ?></h1>

					<?php the_content();


				endwhile; // End of the loop.

				?>

				<div class="solution-form-wrapper">

					<h3>Select Your Problems</h3>
					<p>Did you know the quality of your home’s water can cause a variety of issues throughout your home? To find your solution simply check the symptoms associated with your home water problems and click Get Solution!</p>

					<form action="<?php site_url(); ?>/solution-recommendation/" method="POST">

						<div class="row">

							<div class="solution-form-col col-md-6">

								<div class="input-wrapper input-heading">By Touch</div>
								

								<div class="input-wrapper">
		              <label for="1" class="inputprob"><input type="checkbox" name="ic_symptom1" value="hard_water" id="1">Hard Water</label>
		            </div>

								<div class="input-wrapper">
		              <label for="2" class="inputprob"><input type="checkbox" name="ic_symptom2" value="dry_skin" id="2">Dry Skin / Hair</label>
		            </div>

								<div class="input-wrapper">
		              <label for="3" class="inputprob"><input type="checkbox" name="ic_symptom3" value="stiff_laundry" id="3">Stiff Laundry</label>
		            </div>

								<div class="input-wrapper">
		              <label for="4" class="inputprob"><input type="checkbox" name="ic_symptom4" value="soap_residue" id="4">Soap Scum or Residue</label>
		            </div>

								<div class="input-wrapper">
		              <label for="5" class="inputprob"><input type="checkbox" name="ic_symptom5" value="glass_spots" id="5">Spotty, Cloudy Glassware</label>
		            </div>

		            



								<div class="input-wrapper input-heading">By Smell / Taste</div>

								<div class="input-wrapper">
		              <label for="11" class="inputprob"><input type="checkbox" name="ic_symptom11" value="smell_chlorine" id="11">Chlorine Smell</label>
		            </div>

								<div class="input-wrapper">
		              <label for="25" class="inputprob"><input type="checkbox" name="ic_symptom25" value="smell_egg" id="25">Rotten Egg Smell</label>
		            </div>

								<div class="input-wrapper">
		              <label for="13" class="inputprob"><input type="checkbox" name="ic_symptom13" value="taste_salty" id="13">Salty Taste</label>
		            </div>                        

								<div class="input-wrapper">
		              <label for="14" class="inputprob"><input type="checkbox" name="ic_symptom14" value="taste_bitter" id="14">Bitter Taste</label>
		            </div>

		          </div>

							<div class="solution-form-col col-md-6">

		            <div class="input-wrapper input-heading">By Appearance</div>

								<div class="input-wrapper">
		              <label for="22" class="inputprob"><input type="checkbox" name="ic_symptom22" value="rusty" id="22">Rusty Stains</label>
		            </div>

								<div class="input-wrapper">
		              <label for="26" class="inputprob"><input type="checkbox" name="ic_symptom26" value="bluegreen" id="26">Blue / Green Stain</label>
		            </div>

								<div class="input-wrapper">
		              <label for="27" class="inputprob"><input type="checkbox" name="ic_symptom27" value="colored" id="27">Colored Water</label>
		            </div>                        

								<div class="input-wrapper">
		              <label for="28" class="inputprob"><input type="checkbox" name="ic_symptom28" value="laundry_stains" id="28">Laundry Stains</label>
		            </div>



								<div class="input-wrapper input-heading">By Contaminant</div>


								<div class="input-wrapper">
		              <label for="15" class="inputprob"><input type="checkbox" name="ic_symptom15" value="lead" id="15">Lead</label>
		            </div>

		            <div class="input-wrapper">
		              <label for="16" class="inputprob"><input type="checkbox" name="ic_symptom16" value="chromium" id="16">Chromium-6</label>
		            </div>

		            <div class="input-wrapper">
		              <label for="23" class="inputprob"><input type="checkbox" name="ic_symptom23" value="arsenic" id="23">Arsenic</label>
		            </div>

		            <div class="input-wrapper">
		              <label for="21" class="inputprob"><input type="checkbox" name="ic_symptom21" value="ph" id="21">pH ( Acidic / Alkaline )</label>
		            </div>

		            <div class="input-wrapper">
		              <label for="6" class="inputprob"><input type="checkbox" name="ic_symptom6" value="tds" id="6">Total Dissolved Solids (TDS)</label>
		            </div>


		          </div>

						</div> <!-- row -->

						<button type="submit" class="solution-button">Get Solution!</button>

				</form>
					<script>
						// const formInput = document.querySelectorAll('.inputprob');

						// formInput.onclick =	function() {
						// 	formInput.classList.add('ic-selected');							
						// }

						jQuery(".inputprob").on("click", function(){
						  
						  jQuery(this).toggleClass("ic-selected", true);
						});


					</script>



				</div>





				</main><!-- #main -->

			</div><!-- #primary --> 

		</div>

	</div>

	<?php get_template_part('template-parts/section-blog'); ?>


<?php
get_footer();
