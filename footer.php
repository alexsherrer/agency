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

<div class="footer_holder">
<div class="footer_left">
<h2 class="footer_left_head">Location</h2>
<p class="address">56 South James St <br>
Port Orange, FL 32127 <br>
(555)-555-5555<br>
info@example.com
</p>
</div>
<div class="footer_mid">
<h2 class="footer_mid_head">Quick Links</h2>
<a href="http://agency.local/">Home</a>
<a href="http://agency.local/about/">About</a>
<a href="http://agency.local/clients/">Clients</a>
<a href="http://agency.local/contact/">Contact</a>

</div>
<div class="footer_right">
<h2 class="footer_right_head">
	Hours
</h2>
<p class="hours">Monday-Thursday<br>
11AM-9PM<br>
Friday<br>
12PM-8PM<br>
Saturday-Sunday<br>
11AM-6PM</p>

</div>
</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

