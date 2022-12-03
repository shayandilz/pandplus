<section class="bg-secondary py-4">
    <div class="container my-3">
        <div class="row mt-5 justify-content-between align-items-center">
            <div class="col-12 row align-items-center">
                <div class="col-md-5 col-12 text-dark text-justify">
                    <p class="fs-5">
                        <?php the_field('client_small_title'); ?>
                    </p>
                    <h3 class="fs-1 font-bold my-4">
                        <?php the_field('client_title'); ?>
                    </h3>
                    <p class="fs-5">
                        <?php the_field('client_text'); ?>
                    </p>
                </div>
                <div class="col-md-7 col-12">

                    <article class="d-flex justify-content-evenly flex-wrap gap-2 align-content-center">
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
                                $brand_logo = get_field('brand_logo');?>
                                <div class="col-3 m-auto">
                                    <img width="120px" title="<?php echo esc_attr($brand_logo['alt']); ?>"
                                         class="img-fluid blackWhite lazy" src="<?php echo esc_url($brand_logo['url']); ?>"
                                         alt="<?php echo esc_attr($brand_logo['alt']); ?>">
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