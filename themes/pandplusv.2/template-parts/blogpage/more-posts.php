<div>
    <h4 class="fw-bolder fs-4 ">مقالات پیشنهادی ما</h4>
    <div class="row row-cols-1 row-cols-lg-2">
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => '4',
            'ignore_sticky_posts' => true
        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) : $i = 0;
            /* Start the Loop */
            while ($loop->have_posts()) :
                $loop->the_post();
                ?>
                <a href="<?php echo get_the_permalink(); ?>" class="d-block d-lg-flex my-3 align-items-center">
                    <img height="auto" class="col-12 col-lg-5 me-2 h-auto image-rounded-20 object-fit"
                         src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <div>
                        <div class="align-items-center gap-1 text-danger">
                            <div class="m-0 gap-3 justify-content-start">
                                <?php
                                $category_detail = get_the_category($post->ID);//$post->ID
                                foreach ($category_detail as $category) { ?>
                                    <span class="text-decoration-none me-2 small fw-lighter">
                        <?php echo $category->name ?>
                    </span>
                                <?php } ?>
                            </div>
                            <span class="small">
                                 <?php get_template_part('template-parts/icons/clock');
                                 echo get_the_date('d  F , Y'); ?>
                            </span>
                        </div>
                        <h6 class="fw-bold fs-6 text-danger"><?php echo get_the_title(); ?></h6>
                    </div>
                </a>

            <?php

            endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>
</div>