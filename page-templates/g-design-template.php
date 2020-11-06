<?php
/**
 * Template Name: Logo Design
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
<div class="contain_gd">

        <div class="photo_left"></div>
        <div class="info_right">
            <h2 class="gd_head">Logo Design</h2>
            <p class="gd_para">It’s how other people see your business and weigh it against your competition. It’s how you portray your business through your customer interactions and your online presence. It’s how your business is portrayed visually: the font you select, the colors you choose, and the graphics or images that accompany your brand. </p>
       
    </div>
</div>
<div class="gd_bottom">
    <div class="services">
        <div class="services_photo"></div>
        <div class="services_info">
        <h2 class="services_head">Our Principles</h2>
        <p class="services_para"><strong>Simplicity: </strong>Is the design simple and clean enough to be flexible and easily recognizable? Is it not too busy, distracting, or confusing?<br>
<strong>Memorability:</strong> Is it quickly recognizable? Will people only have to spend a second or two thinking about it to get it?<br>
<strong>Timelessness: </strong>Will it still be a great logo in 10, 20, or even 50 years?<br>
<strong>Versatility: </strong>Does it scale to different sizes without losing quality? Will it work across various media and within different contexts?<br>
<strong>Appropriateness: </strong> Does it resonate with the desired audience?</p>
        </div>
     
    </div>
    <div class="d_process">
    <div class="process_photo"></div>
    <div class="process_info">
        <h2 class="process_head">Mission</h2>
        <p class="process_para">We believe that identity is essential, and to stand out in your space, you have to know who you are. Our work does just that—helping brands uncover and express what makes them unique and how they can drive culture forward.

Because branding is all we do, we can focus on the one thing that matters most: your reputation.
</p>
        </div>
    
    </div>
</div>

<?php
get_footer();