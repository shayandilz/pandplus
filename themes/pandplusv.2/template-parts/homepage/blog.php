<div class="container py-5">
    <div class="row">
        <div class="col-12 col-lg-5">
            <span class="py-2 text-primary">
               <?= get_field('blog_small_header'); ?>
            </span>
            <h3 class="py-2 fw-bolder text-black">
                <?= get_field('blog_header'); ?>
            </h3>
            <p class="py-2">
                <?= get_field('blog_text'); ?>
            </p>
            <button class="gradient btn text-white px-5 py-3 fs-5 rounded-1 w-auto">دریافت مشاوره</button>
        </div>
        <div class="col-12 col-lg-7 d-flex flex-column gap-4 justify-content-center align-items-start">
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