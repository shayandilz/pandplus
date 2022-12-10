<div class="container py-5">
    <div class="row justify-content-center">
        <div class="row col-12 col-lg-10 justify-content-center">
            <div class="col-12 col-lg-6 bg-success p-lg-5 p-1 image-rounded d-flex flex-column gap-4">
            <span class="ps-2 text-primary">
               <?= get_field('faq_small_header', 'option'); ?>
            </span>
                <h3 class="ps-2 fw-bolder text-danger">
                    <?= get_field('faq_header', 'option'); ?>
                </h3>
                <p class="ps-2 text-justify">
                    <?= get_field('faq_text', 'option'); ?>
                </p>
                <div class="accordion" id="accordionFAQ">
                    <?php if (have_rows('faq_list', 'option')):
                        $i = 0;
                        while (have_rows('faq_list', 'option')):
                            $i++;
                            the_row(); ?>
                            <div class="accordion-item border-0 shadow-sm">
                                <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="true"
                                            aria-controls="collapse<?php echo $i; ?>">
                                        <?= get_sub_field('title'); ?>
                                    </button>
                                </h2>
                                <div id="collapse<?php echo $i; ?>"
                                     class="accordion-collapse collapse <?= $i == 1 ? 'show' : ' '; ?>"
                                     aria-labelledby="heading<?php echo $i; ?>"
                                     data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <?= get_sub_field('text'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="col-12 col-lg-6 d-flex flex-row gap-3 my-4 align-items-center ms-lg-n5 ms-n0">
                <?php if (have_rows('faq_images', 'option')): ?>
                    <?php while (have_rows('faq_images', 'option')): the_row();

                        $left = get_sub_field('left_image');
                        $right = get_sub_field('right_image');
                        ?>
                        <div class="ratio ratio-21x9" style="height:360px; width:237px;overflow:hidden;">
                            <img class="img-responsive object-fit image-rounded"
                                 src="<?php echo esc_url($left['url']); ?>"
                                 alt="<?php echo esc_attr($left['alt']); ?>">
                        </div>
                        <div class="ratio ratio-21x9" style="height:360px; width:237px;overflow:hidden;">
                            <img class="img-responsive object-fit image-rounded"
                                 src="<?php echo esc_url($right['url']); ?>"
                                 alt="<?php echo esc_attr($right['alt']); ?>">
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>