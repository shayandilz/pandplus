<section class="bg-secondary py-4">
    <div class="container my-3">
        <div class="row mt-5 justify-content-between align-items-center">
            <div class="col-12 row align-items-center mx-0 justify-content-evenly">
                <div class="col-md-4 col-12 text-justify ">
                    <p data-animate="6" class="fs-6 text-danger ">
                        <?php the_field('client_small_title'); ?>
                    </p>
                    <h3 data-animate="6" class="fs-2 text-danger fw-bolder my-4">
                        <?php the_field('client_title'); ?>
                    </h3>
                    <p data-animate="6" class="text-danger gs_reveal gs_reveal_fromBottom">
                        <?php the_field('client_text'); ?>
                    </p>
                </div>
                <div class="col-md-7 col-12 z-top">

                    <article class="d-flex justify-content-evenly flex-wrap  align-content-center">
                        <?php
                        $portfolio = array(
                            'post_type' => 'portfolio',
                            'post_status' => 'publish',
                            'posts_per_page' => '-1',
                            'ignore_sticky_posts' => true
                        );
                        $loop_portfolio = new WP_Query($portfolio);
                        if ($loop_portfolio->have_posts()) : $i = 0;
                            /* Start the Loop */
                            while ($loop_portfolio->have_posts()) :
                                $loop_portfolio->the_post();
                            $i++;
                                $brand_logo = get_field('brand_logo');?>
                                <div data-animate="<?php echo $i . 8; ?>" class="col-lg-3 px-2 px-lg-0 col-4 gs_reveal
                                gs_reveal_fromBottom
                                 text-center my-auto">
                                    <a href="<?php the_permalink();?>">
                                        <img width="100" title="<?php echo esc_attr($brand_logo['alt']); ?>"
                                             class="img-fluid blackWhite lazy w-100p"
                                             src="<?php echo esc_url($brand_logo['url']); ?>"
                                             alt="<?php echo esc_attr($brand_logo['alt']); ?>">

                                    </a>
                                </div>
                            <?php endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>