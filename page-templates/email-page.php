<?php
/**
 * Template Name: E-mail
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
<div class="contain_em">

        <div class="photo_left"></div>
        <div class="info_right">
            <h2 class="em_head">Email Marketing</h2>
            <p class="em_para">Relevant content is what drives user engagement on the internet. Whether you're selling a product or service, how well that content captures and compels users to act will determine its success. This "content is king" rule applies to your website, social media posts, blogs, emails, podcasts, advertisements, video content, and more. </p>
       
    </div>
</div>
<div class="email_bottom">
    <div class="ema">
        <div class="ema_photo"></div>
        <div class="ema_info">
        <h2 class="ema_head">Email Advertising</h2>
        <p class="ema_para">A poorly-executed advertising campaign can cost your business dearly. Your ads must grab and hold a user's attention and cause them to click to find out more or to buy your product or service. And you have limited space and time in which to capture and convert that customer. Producing compelling campaigns that drive conversions is one of our specialties.</p>
        </div>
     
    </div>
    <div class="news">
    
    <div class="news_info">
        <h2 class="news_head">Newsletters</h2>
        <p class="news_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam convallis id risus nec tempor. Suspendisse non tortor a diam condimentum ultricies. Aenean a augue ut mi tristique imperdiet vitae tempor turpis. Praesent in felis non nibh dictum euismod. Aliquam vel imperdiet libero, vitae iaculis ex. Mauris a viverra nulla.</p>
        </div>
    
        <div class="news_photo"></div>
    </div>
</div>


<?php
get_footer();