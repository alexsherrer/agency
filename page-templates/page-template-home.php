<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="background-page">
<div class="call-cont">
    <h1 class="title">Marketing & Sales Consulting</h1>
    <div class="btn-holder">
    <a class="button" href="http://agency.local/graphic-design/">Logo Design</a>
    <a class="button" href="http://agency.local/social-media/">Social Media</a>
    <a class="button" href="http://agency.local/web-design/">Web Design</a>
    <a class="button" href="http://agency.local/email-marketing/">Email Marketing</a>
    </div>
    </div>
</div>
<div class="section_2">
    <div class="info">
        <h3 class="info_title">Why Should I Use a Digital Marketing Agency?
</h3>
<p class="info_para">It allows you to focus on running your business.
In just the same way that having an accountant means you can leave the books and taxes to them, a digital marketing agency can take the helm of your marketing needs which will free up your hands to take the reins on other important aspects of your company. Whether you want to spend more time n the strategic direction of your company, find better efficiencies in operations, or spend more time on your portfolio management or research and development, having an agency handle your digital marketing strategy can you give the time you need to do so.</p>
 <p class="info_para">Experts in Marketing Know Their Fields.
Digital marketing is not just about coming up with great ideas. That is only a piece of the pie. Having the technical expertise as well as the resources to execute the strategies and initiatives are other pieces that lead to achieving the results you are looking for. That’s why a digital marketing agency utilizes multiple fields of expertise to ensure that your organization is pitched in all the right places, to all the right people, in all the right ways, utilizing innovative and relevant market trends and strategies.</p>
    </div>
    <div class="reviews">
        <h2 class="review_title">Agency</h2>
        <h3 class="review_rtg"><span>4.9</span>      <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></h3>
        <div class="rev_cont">
            <div class="top_line">
            <div class="profile"></div>
            <div class="persona">
            <h5 class="rev_head">James Johnson</h5>
            <h5 class="rev_head"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></h5>
            </div>
            <h5 class="rev_head">9 months ago</h5>
            </div>
            <p class="rev">QuickPro Digital Marketing delivered a beautiful redesign for my website. They made my vision a reality. I know have a professional looking website that I am proud to refer customers too.</p>
        </div>
        <div class="rev_cont">
            <div class="top_line">
            <div class="profile"></div>
            <div class="persona">
            <h5 class="rev_head">Howard Myers</h5>
            <h5 class="rev_head"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></h5>
            </div>
            <h5 class="rev_head">3 months ago</h5>
            </div>
            <p class="rev">Highly recommend for anyone who wants honest Lead generation and marketing work. I have been using QuickPro Digital Marketing for a few years now to help grow my business after going through a few other digital marketing companies. This is the first time I have seen the results, and I get honest answers.</p>
        </div>
    </div>

</div>

<div class="feedback">
    <div class="feedback_left">
    <i class="fa fa-quote-left" id="quote"></i>
        <h2 class="feedback_heading">They were extremely efficient, 
responsive and professional. 
The end result was beautiful!</h2>
    </div>
    <div class="feedback_right">
    <div class="feedback_img">
    
    </div>
    </div>
</div>
<div class="section_4">
    <div class="box_holder">
        <div class="box">
            <h2 class="box_title">Email Marketing</h1>
            <p class="box_para">Relevant content is what drives user engagement on the internet. Whether you're selling a product or service, how well that content captures and compels users to act will determine its success. This "content is king" rule applies to your website, social media posts, blogs, emails, podcasts, advertisements, video content, and more. </p>
        </div>
        <div class="box">
        <h2 class="box_title">Logo Design</h1>
            <p class="box_para">It’s how other people see your business and weigh it against your competition. It’s how you portray your business through your customer interactions and your online presence. It’s how your business is portrayed visually: the font you select, the colors you choose, and the graphics or images that accompany your brand.</p></div>
        <div class="box">
        <h2 class="box_title">Web Design</h1>
            <p class="box_para">Our team of dedicated web designers ensure your website is uniquely built to suit your brand. If you’re working within an established, documented visual brand system, we adjust all your new website colors, images, and layouts to meet your team’s exact standards. 

</p></div>
    </div>
</div>
<div class="section-5">
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

<?php
get_footer();
