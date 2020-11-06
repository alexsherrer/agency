<?php
/**
 * Template Name: Web Design
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
<div class="contain_wd">

<div class="photo_left"></div>
<div class="info_right">
    <h2 class="wd_head">Web Design</h2>
    <p class="wd_para">Our team of dedicated web designers ensure your website is uniquely built to suit your brand. If you’re working within an established, documented visual brand system, we adjust all your new website colors, images, and layouts to meet your team’s exact standards. If your company is still developing the look and feel of your brand, our team can help with that also. We consult with you through interviews and idea boards to set a new brand direction. Then we can build it into your new marketing site.

</p>

</div>
</div>
<div class="wd_bottom">
<div class="dp">
<div class="dp_info">
<h2 class="dp_head">Design Process</h2>
<p class="dp_para"><strong>Goal identification: </strong> Where I work with the client to determine what goals the new website needs to fulfill. I.e., what its purpose is.<br>
<strong>Scope definition:</strong> Once we know the site's goals, we can define the scope of the project. I.e., what web pages and features the site requires to fulfill the goal, and the timeline for building those out.<br>
<strong>Sitemap and wireframe creation:</strong> With the scope well-defined, we can start digging into the sitemap, defining how the content and features we defined in scope definition will interrelate.<br>
<strong>Content creation:</strong> Now that we have a bigger picture of the site in mind, we can start creating content for the individual pages, always keeping search engine optimization (SEO) in mind to help keep pages focused on a single topic. It's vital that you have real content to work with for our next stage:<br>
<strong>Visual elements:</strong> With the site architecture and some content in place, we can start working on the visual brand. Depending on the client, this may already be well-defined, but you might also be defining the visual style from the ground up. Tools like style tiles, moodboards, and element collages can help with this process.<br>
<strong>Testing:</strong> By now, you've got all your pages and defined how they display to the site visitor, so it's time to make sure it all works. Combine manual browsing of the site on a variety of devices with automated site crawlers to identify everything from user experience issues to simple broken links.<br>
<strong>Launch:</strong> Once everything's working beautifully, it's time to plan and execute your site launch! This should include planning both launch timing and communication strategies — i.e., when will you launch and how will you let the world know? After that, it's time to break out the bubbly.</p>
</div>

</div>
<div class="ecom">

<div class="ecom_info">
<h2 class="ecom_head">eCommerce</h2>
<p class="ecom_para">Ecommerce, also known as electronic commerce or internet commerce, refers to the buying and selling of goods or services using the internet, and the transfer of money and data to execute these transactions. Ecommerce is often used to refer to the sale of physical products online, but it can also describe any kind of commercial transaction that is facilitated through the internet.</p>
</div>

<div class="ecom_photo"></div>
</div>
<div class="seo">
<div class="seo_photo"></div>
<div class="seo_info">
<h2 class="seo_head">Search Engine Optimization</h2>
<p class="seo_para">Moving up the ranks of the Google search results page might seem like a mysterious phenomenon, but it’s not magic. It’s science. QuickPro web design moves your site up the rankings. Many of our clients go from the third page of results (or worse) to the first, in a matter of weeks after launch.</p>
</div>

</div>
</div>

<?php
get_footer();