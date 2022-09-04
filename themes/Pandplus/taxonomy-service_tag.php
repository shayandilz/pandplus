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
    'post_type'      => array('services'),
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'tax_query'      => array(
        array(
            'taxonomy'    => 'service_tag',
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
                    <li class="col-lg-4 col-6">
                        <a href="<?php the_permalink(); ?>"
                           class="card mb-2 border-0 lazy rounded-1 no-translate overflow-hidden" style="isolation: isolate">
                            <div class="ratio lazy ratio-1x1 background-blur">
                                <img src="<?php echo get_the_post_thumbnail_url() ?>"
                                     alt="<?php the_title(); ?>">
                            </div>

                            <div class="background-blur-insta p-3 rounded-1z-top d-flex justify-content-between align-items-center">
                                <h6 class="my-2">
                                            <span class="link-white lazy">
                                                <?php the_title(); ?>
                                            </span>
                                </h6>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                     viewBox="0 0 24 25" fill="none">
                                    <path d="M17.5 12.5L6.5 12.5M6.5 12.5L11.0882 16.5M6.5 12.5L11.0882 8.5"
                                          stroke="white" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </a>
                    </li>
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
