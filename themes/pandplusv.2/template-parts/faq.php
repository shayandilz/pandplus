<div class="container py-5">
    <div class="row justify-content-center">
        <div class="row col-lg-10 justify-content-between">
        <div class="col-12 col-lg-7 bg-success p-5 image-rounded d-flex flex-column gap-4">
            <span class="ps-2 text-primary">
               <?= get_field('faq_small_header'); ?>
            </span>
            <h3 class="ps-2 fw-bolder text-black">
                <?= get_field('faq_header'); ?>
            </h3>
            <p class="ps-2">
                <?= get_field('faq_text'); ?>
            </p>
            <div class="accordion" id="accordionFAQ">
                <?php if (have_rows('faq_list')):
                    $i = 0;
                    while (have_rows('faq_list')):
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
        <div class="col-12 col-lg-4 d-flex flex-row gap-3 my-4 align-items-center">
            <?php if (have_rows('faq_images')): ?>
                <?php while (have_rows('faq_images')): the_row();

                    $left = get_sub_field('left_image');
                    $right = get_sub_field('right_image');
                    ?>
                    <div class="ratio ratio-21x9" style="height:360px; width:237px;overflow:hidden;">
                        <img class="img-responsive object-fit image-rounded" src="<?php echo esc_url($left['url']); ?>"
                             alt="<?php echo esc_attr($left['alt']); ?>">
                    </div>
                    <div class="ratio ratio-21x9" style="height:360px; width:237px;overflow:hidden;">
                        <img class="img-responsive object-fit image-rounded" src="<?php echo esc_url($right['url']); ?>"
                             alt="<?php echo esc_attr($right['alt']); ?>">
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    </div>
</div>