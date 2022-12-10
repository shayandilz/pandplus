<?php get_header();
$services = array(
    'post_type' => 'services',
    'post_status' => 'publish',
    'posts_per_page' => '-1',
    'ignore_sticky_posts' => true
);
?>
    <!--top banner-->
    <section class="container">
        <div class="row justify-content-center align-content-center py-5 pb-5">
            <div class="col-12 col-lg-6 px-lg-5 py-5 text-danger">
                <h1 class="display-5 fw-bolder text-center">
                    ما پند پلاس هستیم و سایت های زیبا طراحی میکنیم
                </h1>
                <p class="my-4 text-justify">
                    طرح های شبکه متمرکز بر محتوا، عناصر اجتماعی منحصر به فرد، عملکرد پس از اشتراک گذاری، قرار گرفتن در
                    معرض
                    نویسنده و موارد دیگر!
                </p>
                <?php get_template_part('template-parts/counseling-call'); ?>
                <!--            call details-->
                <?php get_template_part('template-parts/service-cta'); ?>
            </div>
    </section>
    <!--content-->
    <section class="container py-lg-5 py-2">
        <div class="row justify-content-between">
            <!--                sticky sidebar in right-->
            <div class="col-12 col-lg-4 text-center text-lg-start py-5 py-lg-0">
                <p class="text-center text-lg-start">آژانس دیجیتال مارکتینگ پندپلاس</p>
                <h3 class="fw-bolder">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h3>
                <p class="text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده لورم
                    ایپسگی نامفهوم ا</p>
                <button class="btn btn-dark px-5 py-2">بیشتر بدانید</button>
            </div>
            <!--                services grid cards-->
            <div class="col-12 col-lg-8 row justify-content-start gap-5 m-0">
                <?php
                $loop_services = new WP_Query($services);
                if ($loop_services->have_posts()) : $i = 0;
                    /* Start the Loop */
                    while ($loop_services->have_posts()) :
                        $loop_services->the_post(); ?>
                        <article class="card p-2 col-12 col-md-5 border-0 shadow-sm" >
                            <img src="<?= get_the_post_thumbnail_url(); ?>" class="card-img-top"
                                 alt="<?php the_title(); ?>">
                            <div class="card-body">
                                     <span>
                                        <?php get_template_part('template-parts/icons/tag-icon');

                                        $category_detail = get_the_category($post->ID);//$post->ID
                                        foreach ($category_detail as $category) { ?>
                                            <span
                                                    class="py-2 px-3 me-2 text-danger">
                                                <?php echo $category->name ?>
                                            </span>
                                        <?php } ?>
                                    </span>
                                <h5 class="card-title py-3 fw-bolder"><?php the_title(); ?></h5>
                                <p class="card-text"><?php echo the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-dark">بیشتر بدانید</a>
                            </div>
                        </article>
                    <?php endwhile;
                endif;
                wp_reset_postdata(); ?>

            </div>
        </div>
    </section>
<?php get_footer(); ?>