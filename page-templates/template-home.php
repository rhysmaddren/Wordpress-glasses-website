<?php
/**
 * Template Name: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="home-banner">
    <p class="banner-text">Seeing is believing</p>
</div>

<div class="background-container">
    <section class="welcome-section">
        <h1>Welcome to Simon Berry Optometrist</h1>
        <p>
            Thank you for visiting Simon Berry Optometrist, and a 
            warm welcome to our website. Our professional 
            independent eyecare practice provides a friendly,
            customer-focused service to the fantastic people 
            our local community, but offers a diverse range of
            services that people from all over the world come 
            to our practice for. 
        </p>
    </section>

    <section class="action-container">

        <a href="http://glasseswebsiteexample.local/services/" class="call-to-action action-services">
            <p class="action-text">Services</p>
        </a>

        <a href="#" class="call-to-action action-repairs">
            <p class="action-text">Repairs</p>
        </a>
        
        <a href="#" class="call-to-action action-contacts">
            <p class="action-text">Contacts</p>
        </a>

    </section>

    <div class="frames-container">

        <h2>Frames</h2>

        <section class="frames-boxes">
        
            <a href="http://glasseswebsiteexample.local/frames/" class="frames frames-designer">
                <p class="frames-text">Designer</p>
            </a>

            <a href="http://glasseswebsiteexample.local/frames/" class="frames frames-everyday">
                <p class="frames-text">Everyday</p>
            </a>

            <a href="http://glasseswebsiteexample.local/frames/" class="frames frames-specialist">
                <p class="frames-text">Specialist</p>
            </a>

            <a href="http://glasseswebsiteexample.local/frames/" class="frames frames-sunglasses">
                <p class="frames-text">Sunglasses</p>
            </a>
        
        </section>
    </div>
    
    <section class=awards-container>
        <h3 class="awards-header">Awards and accreditations</h3>
        <div class="awards-image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/vision_awards.jpg" alt="Vision pioneer award" class="award-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/living-north.png" alt="Living North award" class="award-image">
        </div>
        <p class="awards-text">
            In 2017, Simon’s campaign for changing the regulation around 
            special facial characteristics results in the Vision Pioneer 
            Campaigner of the Year Award. Simon wanted all his patients, 
            especially children with Down Syndrome, to be able to receive 
            a better level of service, and for this practice to be adopted 
            as widely as possible, to help as many people receive the level
             of optometry service they need.
        </p>
    </section>

</div>

<a href="http://glasseswebsiteexample.local/frames/" class="logo-container">
    <img src="<?php echo get_template_directory_uri(); ?>/img/coco_song.png" alt="Coco song logo" class="logo">
    <img src="<?php echo get_template_directory_uri(); ?>/img/levis.png" alt="Levis logo" class="logo">
    <img src="<?php echo get_template_directory_uri(); ?>/img/lindberg.png" alt="Lindberg logo" class="logo">
    <img src="<?php echo get_template_directory_uri(); ?>/img/wolf.png" alt="Wolf logo" class="logo">
    <img src="<?php echo get_template_directory_uri(); ?>/img/swissflex.png" alt="Swissflex logo" class="logo">
    <img src="<?php echo get_template_directory_uri(); ?>/img/vinylfactory.png" alt="vinyl factory logo" class="logo">
</a>


<?php
get_footer();