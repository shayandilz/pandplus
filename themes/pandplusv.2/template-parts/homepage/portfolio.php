<section class="bg-danger portfolio-main position-relative z-top py-lg-5">
    <?php get_template_part('template-parts/lines/ver-hor-line-big'); ?>
    <div class="container py-4">
        <div class="row justify-content-center">
        <div class="col-lg-10">
        <div class="swiper swiper2">
            <div class="row align-items-center pt-3 pb-5">
                <div class="col-9 col-lg-10">
                    <h3 class="text-white fs-2 m-0 fw-bold">کاری که ما انجام داده ایم</h3>
                </div>
                <div class="col-2 col-lg-2 d-flex gap-3">
                    <div class="swiper-button-next-unique1 fs-1 text-white"><i class="bi bi-arrow-right-circle"></i></div>
                    <div class="swiper-button-prev-unique1 fs-1 text-white"><i class="bi bi-arrow-left-circle"></i></div>
                </div>
            </div>
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'portfolio',
                    'post_status' => 'publish',
                    'posts_per_page' => '6',
                    'ignore_sticky_posts' => true
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()) : $i = 0;
                    /* Start the Loop */
                    while ($loop->have_posts()) :
                        $loop->the_post(); ?>
                        <div class="swiper-slide all-white">
                            <?php get_template_part('template-parts/portfolio-home-template'); ?>
                        </div>
                    <?php endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>

        </div>
    </div>
    </div>
    </div>
</section>
