<section class="py-5 bg-white position-relative z-top">
    <div class="container py-5">
        <div class="row justify-content-center align-items-center">
            <div class="row col-lg-10 align-items-center text-center text-lg-start">
                <div class="col-12 col-lg-5 text-danger">
                    <span data-animate="3" class="py-2 text-danger fs-5">
                       <?= get_field('blog_small_header'); ?>
                    </span>
                    <h3 data-animate="6" class="py-3 fs-2 fw-bolder">
                        <?= get_field('blog_header'); ?>
                    </h3>
                    <p data-animate="9" class="py-2 text-justify">
                        <?= get_field('blog_text'); ?>
                    </p>
                    <?php
                    $blog_button = get_field('blog_button');
                    if ($blog_button): ?>
                        <a data-animate="12" class="btn btn-dark px-5 py-3 fs-5 rounded-1 gs_reveal gs_reveal_fromBottom"
                           href="<?php echo esc_url($blog_button['link']); ?>">
                            <?php echo esc_html($blog_button['title']); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-lg-7 mt-5 mt-lg-0 d-flex flex-column gap-4 justify-content-center align-items-start">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => '3',
                        'ignore_sticky_posts' => true
                    );
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()) : $i = 0;
                        /* Start the Loop */
                        while ($loop->have_posts()) :
                            $loop->the_post();
                            get_template_part('template-parts/blog-home-template');
                        endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</section>