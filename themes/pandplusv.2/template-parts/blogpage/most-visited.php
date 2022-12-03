<!--        heading-->
<div class=" col-lg-10 d-flex justify-content-between align-items-center">
    <div>
        <h4 class="fw-bolder">منتخب پندپلاس</h4>
        <p>پرطرفدارترین دسته های پند پلاس در یک نگاه</p>
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
    endif;
    wp_reset_postdata(); ?>
</div>