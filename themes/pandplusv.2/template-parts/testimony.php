<div class="container py-2">
    <div class="row">
        <div class="col-12">
            <!-- Slider main container -->
            <div class="swiper swiper1 py-5">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <?php if (have_rows('testimonies', 'option')):
                        while (have_rows('testimonies', 'option')):
                            the_row(); ?>
                            <div class="swiper-slide">
                                <div class="row align-items-center justify-content-center g-0">
                                    <?php $image = get_sub_field('image'); ?>
                                    <div class="col-12 col-lg-4 mb-lg-n5 mb-n2">
                                        <div class="ratio ratio-4x3">
                                            <?php if (!empty($image)): ?>
                                                <img class="object-fit image-rounded"
                                                     src="<?php echo esc_url($image['url']); ?>"
                                                     alt="<?php echo esc_attr($image['alt']); ?>">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5 bg-success px-lg-5 px-2 pt-5 d-flex gap-4 flex-column text-justify ms-n0 ms-lg-n5 mb-5 image-rounded overflow-hidden">
                                        <span class="mt-4 mt-lg-0 ps-lg-2 ps-0 text-primary">
                                            آژانس دیجیتال مارکتینگ پندپلاس
                                        </span>
                                        <h3 class="ps-lg-2 ps-0 fw-bolder text-black">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                        </h3>
                                        <p class="ps-lg-2 ps-0 text-danger">
                                            <?php the_sub_field('text') ?>
                                        </p>
                                        <div class="position-relative d-flex gap-3 fs-2 ps-lg-3 ps-0 py-3 justify-content-center justify-content-lg-start">
                                            <div class="swiper-button-next-unique d-flex justify-content-center align-items-center gap-3 text-danger">
                                                <div class="swiper-button-next-unique d-flex justify-content-center align-items-center">
                                                    <i class="bi bi-arrow-right-circle"></i>
                                                </div>
                                                <div class="swiper-button-prev-unique d-flex justify-content-center align-items-center">
                                                    <i class="bi bi-arrow-left-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>