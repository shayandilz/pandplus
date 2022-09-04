<?php /* Template Name: Home */
get_header(); ?>


<?php if (have_posts()) {
    the_post(); ?>
    <main>
        <!--   hero  -->
        <?php get_template_part('template-parts/homepage/hero'); ?>
        <!--  END hero  -->

        <!--   svg-section   -->
        <?php get_template_part('template-parts/homepage/svg-section'); ?>
        <!--  END svg-section  -->

        <!--   portfolio   -->
        <?php get_template_part('template-parts/homepage/portfolio'); ?>
        <!--  END portfolio  -->

        <!--   testimonial   -->
<!--        --><?php //get_template_part('template-parts/homepage/testimonial'); ?>
        <!--  END testimonial  -->

        <!--   BLOG   -->
        <?php get_template_part('template-parts/homepage/blog'); ?>
        <!--  END BLOG  -->

        <!--   social   -->
<!--        --><?php //get_template_part('template-parts/homepage/social'); ?>
        <!--  END social  -->

    </main>
    <?php
}
get_footer();