<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package baloochy
 */

get_header();

/**
 * Get the Term ID of the current term.
 */
$term = get_queried_object();
$term_id = $term->term_id;

/**
 * Get all posts and pages with the current term.
 */
$args = array(
    'post_type'      => array('post', 'page', 'service_tag'),
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'tax_query'      => array(
        array(
            'taxonomy'    => 'post_tag',
            'field'       => 'term_id',
            'terms'       => [$term_id]
        )
    )
);

/**
 * Create a new query.
 */
$query = new WP_Query($args);
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
        if ($query->have_posts()) { ?>
            <div class="row g-3">
                <?php /* Start the Loop */
                while ($query->have_posts()) :
                    $query->the_post(); ?>
                    <article class="col-6 col-lg-3">
                        <div class="rounded-1 overflow-hidden">
                            <?php get_template_part('template-parts/post-card'); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php get_template_part('template-parts/pagination');
            wp_reset_postdata();
        }else{ ?>
            <div class="min-vh-100">
                <p class="text-white">
                    هیچ پستی یافت نشد
                </p>
                <a class="background-radial text-white btn btn-gold px-md-3 px-2 rounded-1" href="<?= get_post_type_archive_link('post') ?>">بازگشت به صفحه بلاگ</a>
            </div>
        <?php }
        ?>
    </section>


<?php

get_footer();
