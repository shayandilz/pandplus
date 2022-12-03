<section class="vh-65 bg-danger py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 row align-items-center">
                <?php get_template_part('template-parts/lines/ver-line-medium'); ?>
                <p class="col fs-2 text-white fw-bold text-justify">
                    <?php the_field('right_about_us_text'); ?>
                </p>
            </div>
            <div class="col-12 col-lg-6 pt-5 text-center text-lg-start">
                <p class="text-white pe-lg-5 text-justify">
                    <?php the_field('left_about_us_text'); ?>
                </p>
                <?php
                $about_button_upper = get_field('about_button_upper');
                if ($about_button_upper): ?>
                    <a class="btn btn-white px-5 py-3 fs-5 rounded-1"
                       type="button"
                       data-bs-toggle="modal"
                       data-bs-target="#exampleModal"
                       href="<?php echo esc_url($about_button_upper['url']); ?>">
                        <?php echo esc_html($about_button_upper['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>