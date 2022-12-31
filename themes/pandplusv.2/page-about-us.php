<?php
get_header();
?>
    <section class="container mt-5 pt-5 pb-3">
        <div class="row justify-content-evenly align-items-center">
            <div class="col-12 col-lg-5">
                <h6><?= get_field('small_title'); ?></h6>
                <h2 class="my-5"><?= get_field('title'); ?></h2>
                <p><?= get_field('content'); ?></p>
                <div class="d-flex justify-content-between mt-4">
                    <div>
                        <h4><?= get_field('title_first_list'); ?></h4>
                        <p><?= get_field('content_first_list'); ?></p>
                    </div>
                    <div>
                        <h4><?= get_field('title_second_list'); ?></h4>
                        <p><?= get_field('content_second_list'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 d-flex justify-content-around">
                <img class="col-5 image-rounded object-fit"
                     src="<?= get_field('left-image')['url']; ?>"
                     alt="<?= get_field('left-image')['title']; ?>">
                <img class="col-5 image-rounded object-fit"
                     src="<?= get_field('right-image')['url']; ?>"
                     alt="<?= get_field('right-image')['title']; ?>">
            </div>

        </div>
        <div class="row justify-content-around my-5">
            <div class="col-lg-4 col-12">
                <p><?= get_field('client_title'); ?></p>
                <h5><?= get_field('client_content'); ?></h5>
            </div>
            <div class="col-lg-6 col-12">
                <article class="d-flex justify-content-evenly flex-wrap  align-content-center">
                    <?php
                    $portfolio = array(
                        'post_type' => 'portfolio',
                        'post_status' => 'publish',
                        'posts_per_page' => '6',
                        'ignore_sticky_posts' => true
                    );
                    $loop_portfolio = new WP_Query($portfolio);
                    if ($loop_portfolio->have_posts()) : $i = 0;
                        /* Start the Loop */
                        while ($loop_portfolio->have_posts()) :
                            $loop_portfolio->the_post();
                            $i++;
                            $brand_logo = get_field('brand_logo'); ?>
                            <div data-animate="<?php echo $i . 8; ?>" class="col-4 gs_reveal gs_reveal_fromBottom
                                 text-center my-auto">
                                <a href="<?php the_permalink(); ?>">
                                    <img width="100px" title="<?php echo esc_attr($brand_logo['alt']); ?>"
                                         class="img-fluid blackWhite lazy"
                                         src="<?php echo esc_url($brand_logo['url']); ?>"
                                         alt="<?php echo esc_attr($brand_logo['alt']); ?>">

                                </a>
                            </div>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                </article>
            </div>
        </div>
    </section>
    <section class="container pb-5 vh-65">
        <!--call to action -->
        <div class="row justify-content-center">
            <div class="col col-lg-8 position-relative mx-5">
                <!--            background image-->
                <img class="position-absolute top-0 start-0 w-100 image-rounded"
                     src="<?= get_field('cta_image')['url']; ?>"
                     alt="<?= get_field('cta_image')['title']; ?>">
                <!--            cta card -->
                <div class="position-absolute start-50 mt-5 me-5 z-top col-5 bg-white p-4 rounded-1 gs_reveal
                    gs_reveal_fromLeft">
                    <h5><?= get_field('cta_title'); ?></h5>
                    <p class="py-2"><?= get_field('cta_content'); ?></p>
                    <button type="button"
                            id="cta-event"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal"
                            class=" btn rounded px-4 py-2 btn-secondary">
                        <?= get_field('cta_button'); ?>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!--        steps-->
    <section class="container pb-5 mb-5">
        <div class="row justify-content-center row-cols-1 row-cols-lg-3 align-items-center">
                <!--                    cards-->
                <?php
                $i = 1;
                while (have_rows('advantages')): the_row();; ?>
                    <div class="col-md-4 col-12 px-2 row justify-content-center">
                        <div class="col-2 display-1 fw-bold text-semi-light"><?= $i; ?></div>
                        <div class="col">
                            <h6><?= get_sub_field('adv_little_title'); ?></h6>
                            <h4 class="h3 fw-bold"><?= get_sub_field('adv_title'); ?></h4>
                            <p class="text-justify"><?= get_sub_field('adv_content'); ?></p>
                        </div>
                    </div>

                    <?php
                    $i++;
                endwhile; ?>
            </div>
    </section>
<?php
get_footer(); ?>