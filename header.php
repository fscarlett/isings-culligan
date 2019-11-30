<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Isings_Culligan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'isings' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="topbar">
			<nav class="top-nav main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'top-menu',
					'menu_id'        => 'top-menu',
				) );
				?>
			</nav>
			<div class="top-contact">
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact Us </a> <a href="tel:209-690-0007" class="top-phone">209-690-0007</a> | <a href="mailto:info@isingsculliganwater.com" class="top-mail">Email</a>
			</div>
			
		</div>
		<div class="nav-wrapper">
			<div class="nav-container">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$isings_description = get_bloginfo( 'description', 'display' );
					if ( $isings_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $isings_description; /* WPCS: xss ok. */ ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'isings' ); ?></button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
