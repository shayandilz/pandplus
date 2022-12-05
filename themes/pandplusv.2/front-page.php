<?php /* Template Name: Home */
/**
 * Front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pandplus
 */

get_header();


if (have_posts()) {
    the_post();
//    <!--banner top -->
    get_template_part('template-parts/homepage/hero');

//    <!--about us -->
    get_template_part('template-parts/homepage/about-us');

//    <!--department svg -->
    get_template_part('template-parts/homepage/workflow');

    //    <!--department svg -->
    get_template_part('template-parts/homepage/services');

//    <!--about us small-->
    get_template_part('template-parts/homepage/cta');

//    <!--portfolio -->
    get_template_part('template-parts/homepage/portfolio');

//    <!-- image and cta -->
    //get_template_part('template-parts/homepage/image-cta');

//    <!-- clients -->
    get_template_part('template-parts/homepage/clients');

//    <!--  testimonial  -->
//    get_template_part('template-parts/testimony');

//    <!--  Contact  -->
    get_template_part('template-parts/homepage/contact');

//    <!--  FAQ  -->
//    get_template_part('template-parts/faq');

//    <!--  BLOG  -->
    get_template_part('template-parts/homepage/blog');

}
get_footer();