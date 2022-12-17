<section class="container-fluid py-5 position-relative svg-section">
    <!--    svg in left-->
    <div class="d-none d-lg-inline">
        <?php get_template_part('template-parts/lines/vertical-line-homePage'); ?>
    </div>

    <div class="container my-lg-5 py-lg-5">
        <div class="row justify-content-start">
            <div class="col-12 col-lg-8 text-center text-lg-start">
                <h3 data-animate="6" class="fw-bolder fs-2 text-danger py-4 ">
                    <?php the_field('workflow_title'); ?>
                </h3>
                <p data-animate="12" class="text-justify text-dark pe-lg-5 ">
                    <?php the_field('workflow_text'); ?>
                </p>
                <?php
                $workflow_button = get_field('workflow_button');
                if ($workflow_button): ?>
                    <a data-animate="20"
                       class="btn btn-dark px-4 py-2 fs-6 rounded gs_reveal gs_reveal_fromRight"
                       type="button"
                       rel="nofollow"
                       data-bs-toggle="modal"
                       data-bs-target="#exampleModal"
                       href="<?php echo esc_url($workflow_button['url']); ?>">
                        <?php echo esc_html($workflow_button['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>