<?php
/** Template Name: Blog Page */

get_header();?>

    <section class="container">
        <div class="row justify-content-center">
<!--        selection post of blogs-->
        <div class="col-lg-10 row grid-border-card vh-80 my-5 pt-5 gap-3 justify-content-center">
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
                            get_template_part('template-parts/blogpage/card-title-on-image');
                        endwhile;
                    endif; ?>
                </div>
<!--        most visited post-->
    <!--        heading-->
        <div class=" col-lg-10 d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="fw-bolder">منتخب پندپلاس</h4>
                    <p>پرطرفدارترین دسته  های پند پلاس در یک نگاه</p>
                </div>
                <a class="text-danger" href="">مشاهده همه ></a>
        </div>
    <!--        most visited post list -->
        <div class="col-lg-10 row my-3">
            <?php
            $args2 = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => '4',
                'ignore_sticky_posts' => true
            );
            $loop = new WP_Query($args2);
            if ($loop->have_posts()) : $i = 0;
                /* Start the Loop */
                while ($loop->have_posts()) :
                    $loop->the_post();
                    get_template_part('template-parts/blogpage/card-title-under');
                endwhile;
            endif; ?>
        </div>
<!--        main area  and sidebar-->
        <div class="row justify-content-center">
<!--            main area-->
            <div class="col-12 col-lg-6">
<!--                video heading-->
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="fw-bolder">مقالات</h4>
                        <p>پرطرفدارترین دسته  های پند پلاس در یک نگاه</p>
                    </div>
                    <a class="text-danger" href="">مشاهده همه ></a>
                </div>
<!--                vertical post list -->
                <div class="row my-3 row-cols-lg-3 row-cols-2">
                    <?php
                    $args4 = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => '-1',
                        'ignore_sticky_posts' => true
                    );
                    $loop = new WP_Query($args4);
                    if ($loop->have_posts()) : $i = 0;
                        /* Start the Loop */
                        while ($loop->have_posts()) :
                            $loop->the_post();
                            get_template_part('template-parts/blogpage/card-title-under');
                        endwhile;
                    endif; ?>
                </div>

            </div>
<!--            sidebar-->
            <div class="col-12 col-lg-4 ">
                <?php get_template_part('template-parts/sidebar');?>
            </div>
        </div>
        </div>
    </section>
<?php get_footer();?>