<?php
/**
 * Template Name: Client
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

<div class="client_holder">
<h2 class="client_head">Our Clients</h2>
<div class="info">
        <div class="photo_left_1"></div>
        <div class="info_right">
           <h2>Who we help</h2>
            <p>At QuickPro, we don’t pretend to be the one and only option for every industry and niche out there.

That’s impossible. Instead, we believe in focusing on the specific industries where we know we can deliver results for our clients. That’s why, from the beginning, QuickPro has been dedicated to helping companies and brands in the healthcare, higher education, legal, home services, franchise, real estate, and restaurant industries. Our reputation speaks for itself (but our case studies and testimonials sure do help!). </p>
       
	</div>
	</div>
</div>
<div class="client_bottom">

<h1 class="client_title">Our Best Clients</h1>
<div class="grid_client">
    <div class="comp" id="cola"></div>
    <div class="comp" id="pub"></div>
    <div class="comp" id="sky"></div>
    <div class="comp" id="lowe"></div>
    <div class="comp" id="sub"></div>
    <div class="comp" id="pay"></div>
    <div class="comp" id="spot"></div>
    <div class="comp" id="yt"></div>
    <div class="comp" id="cbs"></div>
    <div class="comp" id="wal"></div>
    <div class="comp" id="nbc"></div>
    <div class="comp" id="xbox"></div>
</div>
</div>

<div class="pricing">
<h1 class="head_pr">Pricing</h1>
<div class="pricing_holder">
<div class="pr" >
<h2 class="prhead">Advertising</h2>
<h1 class="pr_number">$24</h1>
<h5 class="pr_rate">an hour</h5>
<button class="pr_btn">Purchase</button>
</div>
<div class="pr" >
<h2 class="prhead">Web Design</h2>
<h1 class="pr_number">$75</h1>
<h5 class="pr_rate">an hour</h5>
<button class="pr_btn">Purchase</button>
</div>
<div class="pr" >
<h2 class="prhead">eCommerce</h2>
<h1 class="pr_number">$89</h1>
<h5 class="pr_rate">an hour</h5>
<button class="pr_btn">Purchase</button>
</div>
</div>
</div>
<?php
get_footer();