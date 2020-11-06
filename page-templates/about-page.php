<?php
/**
 * Template Name: About
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
<div class="about_holder">
<h1 class="about_title">About Us</h1>
<div class="about_photo"></div>
</div>
<div class="about_bottom_section">
<div class="about_top">

<h1 class="c_bk">Company Background</h1>
<p>Before anything else, we are a marketing strategy firm. We do not create and execute campaigns or build websites merely to do them. We know you are looking for specific, measurable results and we aim to provide them. We believe in a fully-integrated, go-to-market strategy that reaches and engages your audience in every way, a 360-degree approach that includes your website, content marketing, social media, email campaigns, digital advertising and so much more. Based on our decades of experience in full-service offline advertising, we can even translate your marketing efforts to traditional mediums such as print, broadcast, and outdoor. All with a strategy. All with a plan to win.</p>
</div>
<div class="about_bt">
	<div class="btlt"></div>
	<div class="btrt">
	<p>Are you looking to grow in our local market? Are you unsure of where to begin? Let us help. Vision Digital Advertising helps you create impactful digital campaigns and then get them in front of the right audience. We work with you to decide on the most strategic information and design to ensure your advertisement gets noticed and connects you with solid leads. Do more than flash advertising – grow your brand within your community.</p>
	</div>
</div>
</div>

<?php
get_footer();