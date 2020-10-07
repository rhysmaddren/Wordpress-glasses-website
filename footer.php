<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
					
					<section class="footer-information">
						<ul>
							<li>
								<a href="tel:+01913757544" class="footer-item"><i class="fa fa-phone"></i> 0191 375 75 44</a>
							</li>
							<li>
								<a href="mailto:info@simonberry.co.uk" class="footer-item"> info@simonberry.co.uk</a>
							</li>
						</ul>

						

						<ul class="footer-hours">
							<li>
								<span class=footer-item> Monday-Saturday: 9am-5pm </apan>
							</li>
							<li>
								<span class=footer-item> Sunday: Closed </span>
								
							</li>
						</ul>

						<ul class="footer-social">
							<li>
								<a href="https://www.facebook.com/simonberryoptometrist" target="_blank" rel="noopener noreferrer" class="footer-item"><i class="fa fa-facebook-square aria-hidden=true"></i></a>
							</li>
							
							<li>
								<a href="https://twitter.com/SimonBerryOptom" target="_blank" rel="noopener noreferrer" class="footer-item"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
						</ul>
					</section>

					
					<div class="site-info">

						

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

