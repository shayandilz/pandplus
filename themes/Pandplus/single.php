<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package baloochy
 */
get_header();
global $post;

$posttags = get_the_tags($post->ID);
?>

<?php
while (have_posts()) :
    the_post();
    gt_set_post_view();
    ?>
    <section class="container z-top position-relative default-margin-top ">
    <div class="row justify-content-start align-items-start flex-lg-row flex-column-reverse">
    <div class="col-lg-8 col-12 text-white ps-lg-0">
        <div class="d-inline">
            <span class="badge background-blur rounded-3 p-2 link-white lazy">
                <?php the_category('  ,  '); ?>
            </span>
        </div>
        <h1 class="py-2 border-bottom">
            <?php the_title(); ?>
        </h1>
        <div class="row justify-content-md-between justify-content-center align-items-center">
            <div class="col-md-6 col-12">
                <div class="d-flex justify-content-md-start justify-content-center align-items-center">
                    <div class="lazy me-2">
                        <?php get_template_part('template-parts/author'); ?>
                    </div>
                    <div class="row justify-content-start text-white">
                        <div class="col-12 ">
                            <span><?php echo get_the_author_meta('display_name', $post->post_author); ?></span>
                        </div>
                        <div class="col-12 text-white-50">
                            <?php echo get_the_date('d  F , Y'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 text-md-end text-center mt-3 mt-lg-0">
                <div class="d-inline">
                            <span class="p-2 m-2 rounded-pill background-blur">
                                <a href="<?php echo add_query_arg('post_action', 'like'); ?>">
                                    <?php get_template_part('template-parts/SVG/like'); ?>
                                </a>
                                <?php echo ip_get_like_count('likes') ?>
                            </span>
                    <span class="p-2 m-2 rounded-pill background-blur">
                                <?php get_template_part('template-parts/SVG/comment');
                                echo get_comments_number($post->ID);
                                ?>
                            </span>
                    <span class="p-2 m-2 rounded-pill background-blur">
                                <?php get_template_part('template-parts/SVG/views');
                                echo gt_get_post_view(); ?>
                            </span>
                </div>
            </div>
        </div>
        <div class="text-white py-4 blog-sticky text-justify">
            <?php the_content(); ?>
        </div>
        <?php if ($posttags) { ?>
            <div class="background-blur w-100 d-flex align-items-center rounded-1">
                    <span class="badge rounded-1 bg-white me-2 py-2 align-self-lg-center align-self-start">
                        <?php get_template_part('template-parts/SVG/tags'); ?>
                    </span>
                <div>
                    <?php foreach ($posttags as $tag) { ?>
                        <a href="<?php echo get_tag_link($tag->term_id) ?>" class="fw-normal badge background-blur rounded-1 m-1 p-2">
                                <?php echo $tag->name ?>
                            </a>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <div>
            <h5 class="mb-0 my-5">
                ارسال نظر
            </h5>
            <?php
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
        </div>
    </div>
    <div class="col-lg-4 col-12 ">
    <div class="ratio ratio-1x1 rounded-1 overflow-hidden mb-3">
        <img class="img-fluid overflow-hidden rounded-1 object-fit lazy"
             src="<?php
             if (has_post_thumbnail($post->ID)) {
                 echo get_the_post_thumbnail_url();
             }else{
                 echo esc_url(site_url()) . "/wp-content/uploads/2022/08/doc.jpg";
             }
             ?>"
             alt="<?php the_title(); ?>">
    </div>
<?php endwhile;
wp_reset_query(); ?>
<?php get_template_part('template-parts/sidebar'); ?>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-12 text-white ps-lg-0">
            <?php get_template_part('template-parts/related'); ?>
        </div>
    </div>
    </section>
<?php get_footer();