<section class="py-5 py-lg-0 svg-lines z-top position-relative bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 row align-items-center text-center text-lg-start">
                <?php get_template_part('template-parts/lines/ver-line-small'); ?>
                <p data-animate="6" class="col fs-2 text-danger fw-bolder">
                    <?php the_field('right_cta'); ?>
                </p>
            </div>
            <div class="col-12 col-lg-6 pt-5 text-center text-lg-start ">
                <p data-animate="12" class="text-danger pe-lg-5 text-justify">
                    <?php the_field('left_cta'); ?>
                </p>
                <?php
                $CTA_button = get_field('CTA_button');
                if ($CTA_button): ?>
                    <a data-animate="20"
                       id="cta-event"
                       class="btn btn-dark px-4 py-2 fs-6 rounded gs_reveal gs_reveal_fromRight"
                       type="button"
                       rel="nofollow"
                       href="tel:<?php the_field('call_number_service', 'option') ?>">
                        <?php echo esc_html($CTA_button['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>