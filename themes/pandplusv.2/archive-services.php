<?php

/** Template Name: Archive Services */
get_header();
$services = array(
    'post_type' => 'services',
    'post_status' => 'publish',
    'posts_per_page' => '-1',
    'ignore_sticky_posts' => true
);
$loop_services = new WP_Query($services);
if ($loop_services->have_posts()) : $i = 0; ?>
    <!--top banner-->
    <section class="container">
        <div class="row justify-content-center align-content-center py-5 pb-5">
            <div class="col-12 col-lg-6 px-lg-5 pt-5 text-danger">
                <h1 class="display-5 fw-bolder text-center">
<!--                    --><?php //var_dump(get_field('services_header_title')); ?>
                    ما پند پلاس هستیم
                </h1>
                <?php get_template_part('template-parts/counseling-call'); ?>
                <!--            call details-->
                <?php get_template_part('template-parts/service-cta'); ?>
            </div>
    </section>
    <!--content-->
    <section class="container py-lg-5 pt-2 pb-5 mb-5">
        <div class="row justify-content-between pb-5">
            <!--                sticky sidebar in right-->
<!--            <div class="col-12 col-lg-4 text-center text-lg-start py-5 py-lg-0">-->
<!--                <p class="text-center text-lg-start">آژانس دیجیتال مارکتینگ پندپلاس</p>-->
<!--                <h3 class="fw-bolder">-->
<!---->
<!--                </h3>-->
<!--                <p class="text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده لورم-->
<!--                    ایپسگی نامفهوم ا</p>-->
<!--                <button class="btn btn-secondary px-5 py-2">بیشتر بدانید</button>-->
<!--            </div>-->
            <!--                services grid cards-->
            <div class="col-12 col-lg-12 row justify-content-center gap-4 m-0 rounded-1 bg-dark p-4">

                <?php /* Start the Loop */
                while ($loop_services->have_posts()) :
                    $loop_services->the_post(); ?>
                    <article class="card p-2 col-11 col-md-3 border-0 shadow-sm ">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" class="card-img-top"
                             alt="<?php the_title(); ?>">
                        <div class="card-body">
                            <h5 class="card-title py-3 fw-bolder"><?php the_title(); ?></h5>
                            <p class="card-text"><?php echo the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-secondary">بیشتر بدانید</a>
                        </div>
                    </article>
                <?php endwhile;

                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php endif;
get_footer(); ?>