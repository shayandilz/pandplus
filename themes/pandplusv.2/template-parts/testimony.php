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
                                                <img class="object-fit image-rounded shadow-sm bg-white"
                                                     src="<?php echo esc_url($image['url']); ?>"
                                                     alt="<?php echo esc_attr($image['alt']); ?>">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5 bg-success px-lg-5 px-2 pt-5 d-flex gap-4 flex-column text-justify ms-n0 ms-lg-n5 mb-5 image-rounded overflow-hidden shadow-sm">
                                        <span class="mt-4 mt-lg-0 ps-lg-2 ps-0 text-primary">
                                            آژانس دیجیتال مارکتینگ پندپلاس
                                        </span>
                                        <h3 class="ps-lg-2 ps-0 fw-bolder text-black">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                        </h3>
                                        <p class="ps-lg-2 ps-0 text-danger">
                                            <?php the_sub_field('text') ?>
                                        </p>
                                        <div class="row justify-content-center fs-2 ps-lg-3 ps-0 py-1">
                                            <!--                                              player-->
                                            <audio controls>
                                                <source src="horse.ogg" type="audio/ogg">
                                                <source src="horse.mp3" type="audio/mpeg">
                                                Your browser does not support the audio element.
                                            </audio>
                                        </div>
                                        <p class="ps-lg-2 ps-0 text-danger">
                                            <?php get_field('client_name');?>
                                            </p>

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