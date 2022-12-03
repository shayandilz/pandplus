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
                <a href="<?php echo get_the_permalink(); ?>" class="d-flex my-3">
                    <img class="col-3 me-2 image-rounded-min object-fit" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                    <div>
                        <div class="d-flex align-items-center gap-1 text-danger">
                            <p class="m-0">  طراحی و توسعه وبسایت</p>
                            <hr class="vr">
                            <span><?php  get_template_part('template-parts/icons/services/clock');?></span> <?php echo get_the_date('d  F , Y'); ?>
                        </div>
                        <h6 class="fw-bolder text-danger"><?php echo get_the_title();?></h6>
                    </div>
                </a>

            <?php

            endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>
</div>