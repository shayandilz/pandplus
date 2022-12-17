<?php
get_header();
?>

    <section class="vh-65 d-flex flex-column justify-content-center align-items-center my-5 pt-5 pb-lg-5">
        <article class="z-top position-relative text-center row justify-content-center">
            <div class="col-11 col-lg-8 row justify-content-center p-0">
                <h1 class="display-4 fw-bolder my-auto text-dark lh-lg gs_reveal gs_reveal_fromBottom">
                <?= get_field('title_big_contact'); ?>
                    <br>
                    <span class="text-secondary">
                        <?= get_field('title_big_contact_colored'); ?>
                    </span>
                </h1>
                <p class="col-lg-8 my-4">
                    <?= get_field('title_small_contact'); ?>
                </p>
                <?php get_template_part('template-parts/counseling-call'); ?>
                <div class="col-lg-8">
                    <?php get_template_part('template-parts/service-cta'); ?>
                </div>
            </div>

        </article>
    </section>
<section class="pb-5 mb-5">
    <?php
                $google_map_iframe = get_field('google_map_iframe', 'option');
                if ($google_map_iframe): ?>
    <div class="position-relative vh-65-fix">
        <?php echo $google_map_iframe; ?>
        <a href="https://goo.gl/maps/2dUeBwPYSwTo8tNE7"
           class="d-flex text-secondary fs-1 position-absolute start-50 bottom-50">
            <i class="bi bi-box-arrow-up-right"></i>
        </a>
    </div>
    <?php endif; ?>
    <div style="margin-top:-100px;" class="contact-form " id="contact-us__form">
        <div class="modal-dialog modal-dialog-centered modal-lg shadow-sm image-rounded-min">
            <div class="modal-content image-rounded-min bg-white">
                <div class="modal-body col-12">
                    <div class="modal-header border-0 pb-5">
                        <h5 class="modal-title text-danger fs-3" id="exampleModalLabel">دریافت مشاوره</h5>
                    </div>
                    <?php echo do_shortcode('[gravityform id="8" title="false" description="false" ajax="true"]') ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();?>
