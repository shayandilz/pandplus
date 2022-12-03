<div class="bg-success rounded-3 py-5 ps-4 sidebar-area">
    <div>
        <h4 class="fw-bolder fs-4 ">مقالات پیشنهادی ما</h4>
<!--        grid latest posts -->
        <div class="row row-cols-1 grid-border">
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
                    get_template_part('template-parts/blogpage/grid-post');

                endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
<!--        searchbar -->
                <h4 class="fw-bolder mt-5 ">آخرین مقالات</h4>
                <p class="my-3">پرطرفدارترین دسته  های پند پلاس در یک نگاه</p>
                <?php get_template_part('template-parts/search');?>
<!--        tags-->
        <h4 class="fw-bolder mt-5 ">برچسب ها مقالات</h4>
        <p class="my-3">پرطرفدارترین دسته  های پند پلاس در یک نگاه</p>
        <div class="d-flex">
            <?php  get_template_part('template-parts/blogpage/tag'); ?>
        </div>
<!--        social media -->
        <h4 class="fw-bolder mt-5 ">شبکه های اجتماعی</h4>
        <p class="my-3">پرطرفدارترین دسته  های پند پلاس در یک نگاه</p>
        <?php  get_template_part('template-parts/layout/social'); ?>
    </div>

</div>