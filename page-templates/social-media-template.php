<?php
/**
 * Template Name: Social
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
<div class="contain_social">

        <div class="photo_left"></div>
        <div class="info_right">
            <h2 class="social_head">Social Media Marketing</h2>
            <p class="social_para">We offer full-service social media management services. So, we transform your social media presence with high-quality content, daily activity, monitoring-engagement and increased followers. </p>
       
    </div>
</div>
<div class="social_bottom">
    <div class="online">
        <div class="online_photo"></div>
        <div class="online_info">
        <h2 class="online_head">Online Presence</h2>
        <p class="online_para">Get found on search engines like Google, Bing, and Amazon for relevant searches with our SEO services. So, search engine marketing service helps with more clicks, leads and sales through higher rankings.</p>
        </div>
     
    </div>
    <div class="ads">
    
    <div class="ads_info">
        <h2 class="ads_head">Advertisments</h2>
        <p class="ads_para">Our social media advertising services have been tested and proven to accelerate growth. Therefore, by using QuickPro to advertise through social media, our clients usually see more results at lower costs.</p>
        </div>
    
        <div class="ads_photo"></div>
    </div>
</div>

<?php
get_footer();