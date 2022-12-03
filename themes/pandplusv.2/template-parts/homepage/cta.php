<section class="bg-secondary py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 row align-items-center text-center text-lg-start">
                <?php get_template_part('template-parts/lines/ver-line-small'); ?>
                <p class="col fs-1 text-danger fw-bold">
                    <?php the_field('right_cta'); ?>
                </p>
            </div>
            <div class="col-12 col-lg-6 pt-5 text-center text-lg-start">
                <p class="text-danger pe-lg-5">
                    <?php the_field('left_cta'); ?>
                </p>
                <?php
                $CTA_button = get_field('CTA_button');
                if ($CTA_button): ?>
                    <a class="btn btn-dark px-5 py-3 fs-5 rounded-1"
                       type="button"
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