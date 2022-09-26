<footer class="py-5 text-white z-top overflow-visible position-relative">
    <div class="container py-3">
        <div class="row align-items-center justify-content-md-between justify-content-center">
            <div class="col-md-4 col-12 text-lg-start text-center my-4 my-md-0 order-1 order-md-first">
                <span><a href="<?= esc_url(site_url()); ?>">آژانس دیجیتال مارکتینگ</a> <a
                            href="<?= esc_url(site_url()); ?>">پندپلاس</a></span>
            </div>
            <div class="col-md-4 col-6 text-center my-4 my-md-0">
                <a class="navbar-brand" href="<?= esc_url(site_url()); ?>">
                    <?= get_field('site_logo', 'option'); ?>
                </a>
            </div>
            <div class="col-md-4 col-6 text-md-end text-center my-4 my-md-0">
                <ul class="list-group list-group-horizontal list-unstyled justify-content-lg-end justify-content-center">
                    <?php if (have_rows('social_footer', 'option')):
                        while (have_rows('social_footer', 'option')): the_row();
                            ?>
                            <li class="me-2">
                                <a href="<?php the_sub_field('Link'); ?>"
                                   class="background-radial text-white btn btn-gold p-md-3 p-2 rounded-1">
                                    <?php the_sub_field('icon'); ?>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="row flex-column-reverse flex-lg-row align-items-center">
                <div class="modal-body px-5 py-0 col-lg-7 col-12">
                    <div class="modal-header border-0 pb-5">
                        <h5 class="modal-title text-white fs-3" id="exampleModalLabel">درخواست مشاوره</h5>
                    </div>
                    <?php echo do_shortcode('[gravityform id="8" title="false" description="false" ajax="true"]') ?>
                </div>
                <div class="col-lg-5 col-12 px-0 position-relative rounded-3 overflow-hidden">
                    <button type="button"
                            class="bg-transparent position-absolute top-0 end-0 border-0 text-white z-top me-5 mt-4"
                            data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </button>
                    <div class="ratio ratio-1x1 h-100">
                        <img class="object-fit"
                             src="<?php echo esc_url(site_url()) . "/wp-content/uploads/2022/09/contact-pic.jpeg" ?>"
                             alt="">
                    </div>
                    <div class="background-blur-dark position-absolute top-0 end-0 w-100 h-100 rounded-3 d-flex align-items-center gap-lg-3 gap-2 justify-content-center flex-column px-4 text-center">
                        <a class="navbar-brand mb-1" href="<?= esc_url(site_url()); ?>">
                            <?= get_field('site_logo', 'option'); ?>
                        </a>
                        <h3 class="text-white fs-5">
                            آژانس دیجیتال مارکتینگ پندپلاس
                        </h3>
                        <a href="tel:02188500821" class="d-inline-flex justify-content-center align-items-center gap-3 mt-3">
                            <span class="text-white fs-3 fw-bold">
                                ۰۲۱۸۸۵۰۰۸۲۱
                            </span>
                        </a>
                        <a href="https://www.google.com/maps/place/Pand+Caspian/@35.728996,51.420875,16z/data=!4m5!3m4!1s0x0:0x85d05bdf0c89305e!8m2!3d35.7289956!4d51.4208746?hl=en" class="d-inline-flex justify-content-center align-items-center gap-3 mt-1">
                            <span class="text-white fs-5">
                                تهران خیابان شهید بهشتی ابتدای خیابان سرافراز برج دریای نور طبقه چهار واحد۴۰۴
                            </span>
                        </a>

                        <ul class="list-group list-group-horizontal list-unstyled justify-content-lg-end justify-content-center mt-4">
                            <?php if (have_rows('social_footer', 'option')):
                                while (have_rows('social_footer', 'option')): the_row();
                                    ?>
                                    <li class="me-2">
                                        <a href="<?php the_sub_field('Link'); ?>"
                                           class="text-white bg-transparent border-0 p-md-3 p-2">
                                            <?php the_sub_field('icon'); ?>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>