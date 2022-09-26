<?php
/**
 * The template for displaying category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package amaco
 */
global $post;
get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>
    <section class="container-xl container-fluid z-top position-relative default-margin-top">
        <div class="row justify-content-between align-items-center">
            <div class="col-6 text-white">
                <h1 class="mb-1"><?php echo single_cat_title() ?></h1>
            </div>
            <?php if (1 < $paged) { ?>
                <div class="col-6 text-white text-end">
                    <h3 class="mb-1"> صفحه <?php echo $paged ?></h3>
                </div>
            <?php } ?>
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
    <section class="container-xl container-fluid z-top position-relative py-5 border-top border-white">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-8">
                <div class="text-white text-justify">
                    <?php
                    $catlist = get_the_category();
                    foreach ($catlist as $key => $item) {
                        echo $item->description;
                    } ?>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex justify-content-end">
                <div class="ratio ratio-1x1">
                    <img class="overflow-hidden rounded-1 object-fit lazy"
                         src="<?php
                         foreach ($catlist

                                  as $key => $item) {
                             $cat_image = get_field('category_image', $item->taxonomy . '_' . $item->term_id);
                             if ($cat_image) {
                                 echo esc_url($cat_image['url']);
                             }
                         } ?>"
                         alt="<?= $item->name ?>">
                </div>

            </div>
        </div>
    </section>


<?php
get_footer();