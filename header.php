<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Glasses portfolio website"/>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 
	<link rel="icon" 
      type="image/png" 
      href="<?php echo get_template_directory_uri(); ?>/img/eye_only.png"> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">


	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">
		
		<div class="top-header-holder">

			<div class="image-container">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Simon Berry logo">
			</div>

			<div class="header-contact-container">
				<i class="fa fa-map"></i>
				<a href="https://goo.gl/maps/NHAmEHva3zuFs6bM9" target="_blank" rel="noopener noreferrer" class="header-item">41 Marshall Terrace, Durham, DH1 2HX</a>
			</div>

			<div class="header-contact-container">
				<i class="fa fa-phone"></i>
				<a href="tel:+01913757544" class="header-item">0191 375 75 44</a>
			</div>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
				aria-controls="navbarNavDropdown" aria-expanded="false" 
				aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="menu-title">
					Menu
				</div>
			</button>
		</div>

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

		
			<div class="container">
		

			
					

				

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			
			</div><!-- .container -->
			

		</nav><!-- .site-navigation -->

		

	</div><!-- #wrapper-navbar end -->
