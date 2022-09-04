<div class="background-blur p-3 pb-0 rounded-1 d-lg-flex flex-column g-3 d-none sticky-section">
    <div class="px-0 mb-2 text-white pb-4">
        <h4 class="mb-1">آخرین مقالات</h4>
    </div>
    <?php
    global $post;
    $args2 = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => '3',
    );
    $loop = new WP_Query($args2);
    if ($loop->have_posts()) : $i = 0;
    /* Start the Loop */
    while ($loop->have_posts()) :
    $loop->the_post(); ?>
    <div class="overflow-hidden d-flex flex-row align-items-center pb-3">
        <div class="w-25 position-relative">
            <div class="position-relative">
                <div class="ratio ratio-1x1 rounded-1 overflow-hidden ">
                    <img class="img-fluid overflow-hidden rounded-1 object-fit lazy"
                         src="<?php echo get_the_post_thumbnail_url(); ?>"
                         alt="<?php the_title(); ?>">
                </div>
            </div>
        </div>
        <div class="text-white px-2">
            <a class="link-white" href="<?php the_permalink(); ?>">
                <h6><?php the_title(); ?></h6>
            </a>
            <div class="d-inline">
                <span class="p-2 m-2 rounded-pill background-blur">
                    <?php get_template_part('template-parts/SVG/like');
                    echo ip_get_like_count('likes') ?>
                </span>
                <span class="p-2 m-2 rounded-pill background-blur">
                    <?php get_template_part('template-parts/SVG/comment');
                    echo get_comments_number($post->ID);
                    ?>
                </span>
            </div>
        </div>
    </div>
    <?php endwhile;
    endif;
    wp_reset_postdata() ?>
</div>
