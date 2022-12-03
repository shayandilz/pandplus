<section class="container-fluid py-5 position-relative">
<!--    svg in left-->
    <?php get_template_part('template-parts/lines/vertical-line-homePage'); ?>

    <div class="container my-lg-5 py-lg-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 text-center text-lg-start">
                <h3 class="fw-bold fs-1 py-4">دیجیتال مارکتینگ یکپارچه</h3>
                <p>امروزه دیجیتال مارکتینگ در مورد کل سفر کاربر است. این در مورد این است که چگونه کانال‌های دیجیتالی مانند PPC و رسانه‌های قابل پیشنهاد، سئو، رسانه‌های اجتماعی، بازاریابی محتوا، و داده‌ها و تجزیه و تحلیل‌ها گرد هم می‌آیند تا یک استراتژی دیجیتال یکپارچه را شکل دهند و نقاط را در چندین نقطه تماس به هم بپیوندند.</p>
                <p class="py-3">و این چیزی است که ما در مورد آن هستیم. اطمینان حاصل کنید که همه کانال‌هایتان به‌صورت پیوسته با هم کار می‌کنند تا بازاریابی دیجیتال شما دستاوردهای بیشتری برای شما داشته باشد.</p>
                <button class="btn btn-dark px-5 py-3 fs-5 rounded-1">دریافت مشاوره</button>
            </div>
        </div>
    </div>
<!--    services -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 row justify-content-center py-3">
                <div class="col-lg-6 col-11 text-center">
                    <p class="fs-4">آژانس دیجیتال مارکتینگ پندپلاس</p>
                    <h3 class="fs-2 fw-bold">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ از صنعت چاپ</h3>
                </div>
            </div>
        <div class="col-10 row row-cols-1 row-cols-lg-3 py-4">
            <?php
            $args = array(
                'post_type' => 'services',
                'post_status' => 'publish',
                'posts_per_page' => '6',
                'ignore_sticky_posts' => true
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()) : $i = 0;
                /* Start the Loop */
                while ($loop->have_posts()) :
                    $loop->the_post();
                    get_template_part('template-parts/services-home-template');
                endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
    </div>

</section>