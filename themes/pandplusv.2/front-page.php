<?php /* Template Name: Home */
/**
 * Front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pandplus
 */

get_header(); ?>


<?php if (have_posts()) {
    the_post(); ?>
    <!--banner top -->
    <?php get_template_part('template-parts/homepage/banner-top'); ?>

    <!--department svg -->
    <?php get_template_part('template-parts/homepage/department'); ?>

    <!-- image and cta -->
    <?php get_template_part('template-parts/homepage/image-cta'); ?>

    <!-- clients -->
    <?php get_template_part('template-parts/homepage/clients'); ?>

    <!--  testimonial  -->
    <?php get_template_part('template-parts/homepage/testimony'); ?>

    <!--  Contact  -->
    <?php get_template_part('template-parts/homepage/contact'); ?>

    <!--  FAQ  -->
    <?php get_template_part('template-parts/homepage/faq'); ?>

    <!--  BLOG  -->
    <?php get_template_part('template-parts/homepage/blog'); ?>

    <?php
}
get_footer();