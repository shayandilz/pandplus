<div class="container py-2">
    <div class="row">
        <div class="col-12">
            <!-- Slider main container -->
            <div class="swiper swiper1 py-lg-5">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <?php if (have_rows('testimonies', 'option')):
                        while (have_rows('testimonies', 'option')):
                            the_row(); ?>
                            <div class="swiper-slide">
                                <div class="row align-items-center justify-content-center g-0">
                                    <?php $image = get_field('testi_image'); ?>
                                    <div class="col-12 col-lg-4 mb-lg-n5 mb-n2">
                                        <div class="ratio ratio-4x3">
                                            <?php if (!empty($image)): ?>
                                                <img class="object-fit image-rounded shadow-sm bg-white"
                                                     src="<?php echo esc_url($image['url']); ?>"
                                                     alt="<?php echo esc_attr($image['alt']); ?>">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7 bg-success px-lg-5 px-2 pt-5 d-flex gap-2 flex-column
                                     text-justify ms-n0 ms-lg-n5 mb-5 image-rounded overflow-hidden shadow-sm">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="mt-4 mt-lg-0 ps-lg-2 ps-0 text-primary">
                                            آژانس دیجیتال مارکتینگ پندپلاس
                                        </span>
                                            <img width="100px"  src="<?php echo get_field('brand_logo')['url']; ?>"
                                                 alt="<?php the_title(); ?>">
                                        </div>

                                        <h3 class="ps-lg-2 ps-0 fw-bolder text-black">
                                            <?php the_field('testi_title') ;?>
                                        </h3>
                                        <p class="ps-lg-4 ps-0 all-dark">
                                            <?php echo get_the_content(); ?>
                                        </p>
                                        <div class="row justify-content-center fs-2 ps-lg-3 ps-0 py-1">
                                            <!--                                              player-->
                                            <audio controls>
                                                <source src="<?php the_field('testi_audio')['url'] ;?>"
                                                        type="audio/ogg">
                                                <source src="<?php the_field('testi_audio')['url'] ;?>"
                                                        type="audio/mpeg">
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