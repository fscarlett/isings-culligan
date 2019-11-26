<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Isings_Culligan
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-container container">
			<div class="row">
				<div class="col-md-3">
					<h2>Contact Us</h2>
					<p>1226 Enterprise St</p>
					<p>Stockton CA 95204</p>
					<p class="footer-phone"><a href="tel:209-690-0007">209-690-0007</a></p>
					<a href="mailto:info@isingsculliganwater.com" class="btn ic-button">Email Us</a>
				</div>

				<div class="col-md-3">
					<h2>Services</h2>
					<nav class="footer-nav">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'menu_id'        => 'footer-menu',
							) );
							?>
					</nav>

				</div>

				<div class="col-md-3">
					<h2>Proudly Serving</h2>
					<p>
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly serving Livermore, Pleasanton, Brentwood, Fremont, Walnut Creek, and all of Alameda and Contra Costa counties', 'isings' ) );
						?>
					</p>
				</div>

				<div class="col-md-3">
					<h2>Follow Us</h2>
					<div class="socials">
						<a href="https://www.facebook.com/isingsculliganwaterofstockton/"><i class="fa fa-facebook-square"></i></a>
						<a href="https://www.twitter.com/isingsculligan1"><i class="fa fa-twitter-square"></i></a>
					</div>
				</div>
			</div>

		</div>


		

	</footer><!-- #colophon -->
	<div class="site-info">


			<?php
				wp_nav_menu( array(
					'theme_location' => 'subfooter-menu',
					'menu_id'        => 'subfooter-menu',
				) );
			?>

			<div class="credit"><a href="https://provaromarketing.com/">Website Design and Development <br>by Provaro Marketing</a></div>
			
			
		</div><!-- .site-info -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
