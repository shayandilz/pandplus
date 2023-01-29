<section
        class="<?php echo get_field('slide_type') == 'video' ? 'front__banner-video' : 'front__banner'; ?> position-relative">
    <?php if (get_field('slide_type') == 'video') { ?>
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <video autoplay loop muted playsinline class="w-100 h-100 object-fit">
                <source src="<?= get_field('video_slide_mobile')['url'] ?>" type="video/webm">
            </video>
            <p class="position-absolute end-30 start-50 translate-middle d-none d-lg-inline">
                <?php get_template_part('template-parts/svg/scroll-mouse'); ?></p>
        </div>
    <?php }
    if (get_field('slide_type') == 'picture') { ?>
        <div class="swiper swiper6 h-100">
            <div class="swiper-wrapper h-100">
                <?php while (have_rows('hero_slider')):
                    the_row(); ?>
                    <div class="swiper-slide">
                        <img src="<?= get_sub_field('img_slide_desktop')['url'] ?>"
                             alt="<?= get_sub_field('img_slide_desktop')['title'] ?>"
                             class="object-fit position-absolute start-0 top-0 w-100 h-100 d-none d-lg-inline">
                        <img src="<?= get_sub_field('img_slide_mobile')['url'] ?>"
                             alt="<?= get_sub_field('img_slide_mobile')['title'] ?>"
                             class="object-fit position-absolute start-0 top-0 w-100 h-100 d-lg-none">
                        <div class="container z-top">
                            <div class="d-inline-flex align-items-start mt-5">
                                <div class="col text-warning text-center z-top mt-5">
                                    <div>
                                        <h1 class="fw-bolder display-5 p-lg-2 p-0 m-0">
                                            <?= get_sub_field('slider_title'); ?>
                                        </h1>
                                    </div>
                                    <h5 class="fs-3 p-lg-2 fw-bold text-appear">
                                        <?= get_sub_field('slider_content'); ?>
                                    </h5>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <?php get_template_part('template-parts/icons/logo'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php } ?>
</section>