<section class="bg-info svg-lines position-relative py-5 py-lg-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 row align-items-center m-0">
                <?php get_template_part('template-parts/lines/ver-line-medium'); ?>
                <p data-animate="6" class="col fs-2 text-white fw-bolder text-start gs_reveal gs_reveal_fromBottom">
                    <?php the_field('right_about_us_text'); ?>
                </p>
            </div>
            <div class="col-12 col-lg-6 pt-5 text-center text-lg-start">
                <p data-animate="12" class="text-white pe-lg-5 text-justify fs-6 lh-lg gs_reveal gs_reveal_fromBottom">
                    <?php the_field('left_about_us_text'); ?>
                </p>
                <?php
                $about_button_upper = get_field('about_button_upper');
                if ($about_button_upper): ?>
                    <a
                            data-animate="20"
                            class="btn btn-white px-4 py-2 fs-6 rounded gs_reveal gs_reveal_fromBottom"
                            type="button"
                            rel="nofollow"
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