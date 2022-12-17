<section class="bg-warning py-5">
    <div class="container py-4 contact-form">
        <div class="row align-items-center justify-content-center">
            <div class="col-11 col-lg-4 d-flex flex-column gap-3">
                <h3 data-animate="6" class="text-danger fs-2 fw-bolder lh-lg gs_reveal gs_reveal_fromRight">
                    <?= get_field('contact_header'); ?>
                </h3>
                <span data-animate="6" class="border-1 border-top border-danger fs-5 text-center text-lg-start text-danger w-auto pt-3 gs_reveal gs_reveal_fromRight">
               <?= get_field('contact_sub_header'); ?>
           </span>
                <a data-animate="6" class="btn text-danger fw-bold fs-5 text-center text-lg-start my-2 gs_reveal gs_reveal_fromRight" href="tel:<?= get_field('contact_number'); ?>">
                    <?= get_field('contact_number'); ?>
                </a>
            </div>
            <div data-animate="12" class="col-11 col-lg-6 form-front z-top">
                <?php
                $gravity = get_field('contact_form');
                echo do_shortcode('[gravityform id="'.$gravity.'" title="false" description="false" ajax="true"]') ?>
            </div>
        </div>
    </div>
</section>