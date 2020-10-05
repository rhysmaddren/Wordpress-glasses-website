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

        <a href="#" class="call-to-action action-services">
            <p class="action-text">Services</p>
        </a>

        <a href="#" class="call-to-action action-repairs">
            <p class="action-text">Repairs</p>
        </a>
        
        <a href="#" class="call-to-action action-contacts">
            <p class="action-text">Contacts</p>
        </a>

    </section>
    

</div>
    


<?php
get_footer();