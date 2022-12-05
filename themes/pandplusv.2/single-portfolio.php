<?php get_header(); ?>
    <!--slider section -->
    <section class="container">
        <!--    title-->
        <div class="row align-items-start pt-5 mt-5">
            <div class="d-flex gap-3 justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-3 ">
                    <h1 class="text-danger display-6">
                        <?php the_title(); ?>
                    </h1>
                    <hr class="vr text-danger">
                    <p>
                        <?php $category_detail = get_the_category($post->ID);//$post->ID
                        foreach ($category_detail as $category) { ?>
                            <span
                                class="py-2 px-3 me-2 text-danger">
                                     <?php echo $category->name ?>
                                 </span>
                        <?php } ?>
                    </p>
                </div>
                <a class="text-danger" href="#">مشاهده همه</a>
            </div>
        </div>
        <!--    slider swiper -->
        <div class="row justify-content-center position-relative py-2">
            <div class="swiper5 col-12 col-lg-10 overflow-hidden image-rounded-min">
                <div class="swiper-wrapper ">
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
                            $loop_portfolio->the_post(); ?>
                            <a class="swiper-slide  ratio ratio-1x1 " href="<?php the_permalink(); ?>">
                                <img class="object-fit" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                            </a>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                </div>
                <!-- If we need navigation buttons -->
            </div>
            <div class="text-danger fs-4 swiper-button-prev swiper-button-prev-unique5">
                <i class="bi bi-arrow-right-circle"></i>
            </div>
            <div class="text-danger fs-4 swiper-button-next swiper-button-next-unique5">
                <i class="bi bi-arrow-left-circle"></i>
            </div>
        </div>
    </section>
    <!--answer area-->
    <section class="container py-lg-5 my-5">
        <div class="row justify-content-center">
            <div class="row col-lg-10 justify-content-center">
                <div class="col-lg-4 d-flex gap-3">
                    <span>1</span>
                    <h3 class="text-danger">مشکل</h3>
                </div>
                <div class="col-lg-8">
                    <p class="text-justify">ما خدمات تجربه دیجیتال را به استارت آپ ها و کسب و کارهای کوچک ارائه می دهیم. ما
                        با ایجاد هویت برند به
                        مشتریان خود کمک می کنیم تا موفق شوند.</p>
                </div>
            </div>
        </div>
    </section>
    <!--services-->
    <section class="container">
        <div class="row justify-content-between row-cols-1 row-cols-lg-3">
            <!--        cards-->
            <div class="col gap-3 my-3 my-lg-0 p-4 p-lg-0">
                <p class="m-0">01</p>
                <span>خدمات</span>
                <h4 class="text-danger fw-bolder py-3">
                    بازاریابی دیجیتال
                </h4>
                <p class="text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده لورم ایپسوم
                    متن ساختگی با تولید
                    سادگی نامفهوم از صنعت چاپ و با استفاده لورم ایپسوم متن ساختگی</p>
                <ul class="list-unstyled">
                    <li>تبلیغات کلیکی</li>
                    <li>برند سازی</li>
                    <li>فلان بهمان</li>
                </ul>
            </div>
        </div>
    </section>
<?php get_footer(); ?>