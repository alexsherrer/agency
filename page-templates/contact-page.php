<?php
/**
 * Template Name: Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();


if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>
<div class="contact_container">
    
    <h1 class="cheading">Any Questions?</h1>
    <h3 class="cinfo">Feel Free to Contact Us</h3>
    <form class="main_form">
        <p>First Name</p>
    <input type="text"></input>
    <p>Last Name</p>
    <input type="text"></input>
    <p>Email</p>
    <input type="text"></input>
    <p>Phone</p>
    <input type="text"></input>
    <input type="submit" value="Submit">
    </form>
</div>


<?php
get_footer();