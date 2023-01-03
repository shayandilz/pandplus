<section class="bg-info portfolio-main position-relative pt-lg-5 vh-65">
    <?php get_template_part('template-parts/lines/ver-hor-line-big'); ?>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="swiper swiper2">
                    <div class="row align-items-center pt-3 pb-5 ">
                        <div class="col-12 col-lg-10">
                            <h3 data-animate="6" class="text-white text-center text-lg-start fs-1 m-0 fw-bold gs_reveal gs_reveal_fromRight">کارهایی که ما انجام داده ایم</h3>
                        </div>
                        <div class="col-12 col-lg-2 d-flex gap-3 justify-content-center text-lg-start">
                            <div data-animate="12" class="swiper-button-next-unique1 fs-1 text-white gs_reveal gs_reveal_fromRight">
                                <i class="bi bi-arrow-right-circle"></i>
                            </div>
                            <div data-animate="18" class="swiper-button-prev-unique1 fs-1 text-white gs_reveal gs_reveal_fromLeft">
                                <i class="bi bi-arrow-left-circle"></i>
                            </div>
                        </div>
                    </div>
                    <div data-animate="12" class="swiper-wrapper">
                        <?php
                        $args = array(
                            'post_type' => 'portfolio',
                            'post_status' => 'publish',
                            'posts_per_page' => '-1',
                            'ignore_sticky_posts' => true,
                        );
                        $loop = new WP_Query($args);
                        if ($loop->have_posts()) : $i = 0;
                            /* Start the Loop */
                            while ($loop->have_posts()) :
                                $loop->the_post();

                                ?>
                                <div class="swiper-slide all-white">
                                    <?php  get_template_part('template-parts/portfolio-home-template'); ?>
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
