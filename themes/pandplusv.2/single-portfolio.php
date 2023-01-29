<?php get_header(); ?>
    <!--slider section -->
    <section class="container">
        <!--    title-->
        <div class="row align-items-start pt-5 mt-5">
            <div class="d-flex gap-3 justify-content-center justify-content-lg-between align-items-center px-lg-5 flex-wrap">
                <div class="d-block d-lg-flex align-items-center gap-3 ">
                    <h1 class="text-danger display-6">
                        <?php the_title(); ?>
                    </h1>
                    <hr class="d-none d-lg-inline vr text-danger">
                    <p class="m-0 py-2 py-lg-0 text-center text-lg-start">
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
                    <a class="text-danger fw-bold"
                       aria-label="<?php echo get_field('brand_url')['title']; ?>"
                       href="<?php echo get_field('brand_url'); ?>"
                        alt="<?php echo get_field('brand_url')['title']; ?>">
                        وب سایت ></a>
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
    <section class="container py-lg-5 my-lg-5 my-2">
        <div class="row justify-content-center">
                <?php
                $i = 0;
                while (have_rows('solutions')): the_row();
                    $i++;
                    ?>
                    <div class="row col-lg-10 justify-content-center">

                        <div class="col-lg-4 d-flex gap-3">
                            <span><?= $i; ?></span>
                            <h3 class="text-danger">
                                <?php the_sub_field('solution_title') ;?>
                            </h3>
                        </div>
                        <div class="col-lg-8">
                            <p class="text-justify">
                                <?php the_sub_field('solution_content') ;?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </ul>

        </div>
    </section>
    <!--services-->
    <section class="bg-secondary py-5">
        <div class="container pb-5 mb-5">
            <div class="row justify-content-center row-cols-1 row-cols-lg-3">
                <!--        cards-->
                <?php
                foreach ($tour_pages as $tour) { ?>
                    <article class="card bg-transparent p-4 col-11 col-md-5 border-0 my-2 my-lg-0">
                        <img src="<?= get_the_post_thumbnail_url($tour->ID); ?>" class="h-auto card-img-top bg-white"
                             alt="<?php the_title(); ?>">
                        <div class="card-body bg-white shadow-sm">
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