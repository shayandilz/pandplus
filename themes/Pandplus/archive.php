<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package baloochy
 */

get_header();
?>
    <section class="container-xl container-fluid z-top position-relative default-margin-top">
        <div class="row justify-content-start align-items-center">
            <div class="col-12 text-white">
                <h1 class="mb-1"><?php echo single_cat_title() ?></h1>
            </div>
        </div>
    </section>
    <section class="container-xl container-fluid z-top position-relative pt-5">
        <?php
        if (have_posts()) : ?>
            <div class="row g-3">
                <?php /* Start the Loop */
                while (have_posts()) :
                    the_post(); ?>
                    <article class="col-6 col-lg-3">
                        <div class="rounded-1 overflow-hidden">
                            <?php get_template_part('template-parts/post-card'); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php get_template_part('template-parts/pagination');
        endif;
        wp_reset_postdata() ?>
    </section>


<?php

get_footer();
