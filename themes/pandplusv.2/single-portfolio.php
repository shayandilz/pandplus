<?php get_header(); ?>
    <!--slider section -->
    <section class="container">
        <!--    title-->
        <div class="row align-items-start pt-5 mt-5">
            <div class="d-flex gap-3 justify-content-between align-items-center px-lg-5">
                <div class="d-flex align-items-center gap-3 ">
                    <h1 class="text-danger display-6">
                        <?php the_title(); ?>
                    </h1>
                    <hr class="vr text-danger">
                    <p class="m-0">
                        <?php
                        $tour_pages = get_posts(
                            array(
                                'post_type' => 'services',
                                'meta_query' => array(
                                    array(
                                        'key' => 'projects_services', // name of custom field
                                        'value' => '"' . get_the_ID() . '"',
                                        'compare' => 'LIKE'
                                    )
                                )
                            )
                        );
                        foreach ($tour_pages as $tour) {
                            echo '<span class="ps-1 border-secondary me-3">' . $tour->post_title . ' </span>';
                        }
                        ?>
                    </p>
                </div>
                <!--                website link-->
                <div class="d-flex gap-3 ">
                    <a class="text-danger fw-bold" href="<?php echo get_field('brand_url'); ?>"> وب سایت ></a>
                </div>
            </div>
        </div>
        <!--    slider swiper -->
        <div class="row justify-content-center align-items-start">
            <?php get_template_part('template-parts/testimony'); ?>
            <!-- If we need navigation buttons -->
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
                    <p class="text-justify">ما خدمات تجربه دیجیتال را به استارت آپ ها و کسب و کارهای کوچک ارائه می دهیم.
                        ما
                        با ایجاد هویت برند به
                        مشتریان خود کمک می کنیم تا موفق شوند.</p>
                </div>
            </div>
        </div>
    </section>
    <!--services-->
    <section class="bg-secondary py-5">
        <div class="container pb-5 mb-5">
            <div class="row justify-content-between row-cols-1 row-cols-lg-3">
                <!--        cards-->
                <?php
                foreach ($tour_pages as $tour) { ?>
                    <article class="card p-2 col-12 col-md-5 border-0 shadow-sm">
                        <img src="<?= get_the_post_thumbnail_url($tour->ID); ?>" class="card-img-top"
                             alt="<?php the_title(); ?>">
                        <div class="card-body">
                            <h5 class="card-title py-3 fw-bolder"><?= $tour->post_title ?></h5>
                            <p class="card-text"><?= $tour->post_excerpt; ?></p>
                            <a href="<?php the_permalink($tour->ID); ?>" class="btn btn-dark">بیشتر بدانید</a>
                        </div>
                    </article>
                <?php }
                ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>