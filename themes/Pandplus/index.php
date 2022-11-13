<?php
/* Template Name: Blog Archive */
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package amaco
 */
global $post;
get_header();

?>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
if (is_home() && !is_category() && 1 == $paged) {
    ?>
    <section class="container-xl container-fluid z-top position-relative default-margin-top pb-5">
        <div class="row justify-content-start align-items-center">
            <div class="col-12 text-white  mb-3">
                <h1 class="mb-1">پست های پرطرفدار</h1>
                <p class="mt-1">پرطرفدارترین پست های پند پلاس در یک نگاه</p>
            </div>
        </div>
        <div class="grid blog-grid container-fluid justify-content-center justify-content-md-between">
            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => '4',
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()) : $i = 0;
                /* Start the Loop */
                while ($loop->have_posts()) :
                    $loop->the_post(); ?>

                    <article class="h-100 row ">
                        <div class="col-12 overflow-hidden row flex-xl-row-reverse flex-row g-0">
                            <div class="col-12 col-lg-4 position-relative blog-archive">
                                <div class="position-relative">
                                    <div class="rounded-1 overflow-hidden">
                                        <a href="<?php the_permalink(); ?>">
                                            <img class="ratio ratio-1x1 img-fluid overflow-hidden rounded-1 object-fit lazy"
                                                 src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                 alt="<?php the_title(); ?>">
                                        </a>
                                    </div>
                                    <?php $icon = get_field('icon_blog');
                                    if ($icon) {
                                        ?>
                                        <span class="position-absolute top-0 end-0 m-2 rounded border-light border background-blur-dark p-2">
                                             <i class="iconsax" icon-name="<?php the_field('icon_blog'); ?>"></i>
                                        </span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8 text-white px-xl-4 p-3">
                                <a class="text-white" href="<?php the_permalink(); ?>">
                                    <h4><?php the_title(); ?></h4>
                                </a>
                                <p>
                                    <?php
                                    $excerpt = get_the_excerpt();
                                    $excerpt = substr($excerpt, 0, 200);
                                    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
                                    $excerpt = trim(preg_replace('/\s+/', ' ', $excerpt));

                                    echo $excerpt . '...';
                                    ?>
                                </p>
                                <div class="d-inline">

                                <span class="p-2 m-2 rounded-pill background-blur">
                                <?php get_template_part('template-parts/SVG/like'); ?>
                                <?php echo ip_get_like_count('likes') ?>
                                </span>
                                    <span class="p-2 m-2 rounded-pill background-blur">
                                    <?php get_template_part('template-parts/SVG/comment');
                                    echo get_comments_number();;
                                    ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endwhile;
            endif;
            wp_reset_postdata() ?>
        </div>

    </section>
    <?php get_template_part('template-parts/archive-category'); ?>
<?php }  ?>
    <section class="container-xl container-fluid z-top position-relative default-margin-top">
        <div class="row justify-content-start align-items-center">
            <div class="col-12 text-white">
                <h1 class="mb-1"><?php echo single_cat_title() ?></h1>
            </div>
        </div>
    </section>
<?php if (1 < $paged) { ?>
    <section class="container-xl container-fluid z-top position-relative">
        <div class="row justify-content-start align-items-center">
            <div class="col-12 text-white">
                <h1 class="mb-1"> صفحه <?php echo $paged ?></h1>
            </div>
        </div>
    </section>
<?php } ?>
    <section class="container-xl container-fluid z-top position-relative pt-5">
        <?php
        if (have_posts()) : ?>
            <div class="row g-3 flex-row flex-nowrap flex-lg-wrap overflow-scroll no-overflow">
                <?php /* Start the Loop */
                while (have_posts()) :
                    the_post(); ?>
                    <article class="col-10 col-lg-3">
                        <div class="rounded-1 overflow-hidden" style="isolation: isolate">
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
