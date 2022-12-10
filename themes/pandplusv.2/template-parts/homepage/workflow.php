<section class="container-fluid py-5 position-relative svg-section">
    <!--    svg in left-->
    <div class="d-none d-lg-inline">
        <?php get_template_part('template-parts/lines/vertical-line-homePage'); ?>
    </div>

    <div class="container my-lg-5 py-lg-5">
        <div class="row justify-content-start">
            <div class="col-12 col-lg-8 text-center text-lg-start">
                <h3 class="fw-bold fs-1 text-danger py-4 gs_reveal gs_reveal_fromTop">
                    <?php the_field('workflow_title'); ?>
                </h3>
                <p class="text-justify text-dark pe-lg-5 gs_reveal gs_reveal_fromRight">
                    <?php the_field('workflow_text'); ?>
                </p>
                <?php
                $workflow_button = get_field('workflow_button');
                if ($workflow_button): ?>
                    <a class="btn btn-dark px-5 py-3 fs-5 rounded-1 animate__animated animate__fadeInLeft animate__delay-2s"
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