<section class="py-5 svg-lines z-top position-relative bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 row align-items-center text-center text-lg-start">
                <?php get_template_part('template-parts/lines/ver-line-small'); ?>
                <p data-animate="6" class="col fs-2 text-danger fw-bolder gs_reveal gs_reveal_fromBottom">
                    <?php the_field('right_cta'); ?>
                </p>
            </div>
            <div class="col-12 col-lg-6 pt-5 text-center text-lg-start gs_reveal gs_reveal_fromBottom">
                <p data-animate="12" class="text-danger pe-lg-5 text-justify">
                    <?php the_field('left_cta'); ?>
                </p>
                <?php
                $CTA_button = get_field('CTA_button');
                if ($CTA_button): ?>
                    <a data-animate="20"
                       class="btn btn-dark px-4 py-2 fs-6 rounded gs_reveal gs_reveal_fromBottom"
                       type="button"
                       rel="nofollow"
                       data-bs-toggle="modal"
                       data-bs-target="#exampleModal"
                       href="<?php echo esc_url($CTA_button['url']); ?>">
                        <?php echo esc_html($CTA_button['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>