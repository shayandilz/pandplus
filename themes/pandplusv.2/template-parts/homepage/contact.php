<section class="bg-warning py-4">
    <div class="container py-2 contact-form">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-4 d-flex flex-column gap-3">
                <h3 class="text-danger fw-bolder">
                    <?= get_field('contact_header'); ?>
                </h3>
                <span class="border-1 border-top border-danger text-danger w-auto pt-3">
               <?= get_field('contact_sub_header'); ?>
           </span>
                <a class="text-danger fw-bold fs-5" href="tel:<?= get_field('contact_number'); ?>">
                    <?= get_field('contact_number'); ?>
                </a>
            </div>
            <div class="col-12 col-lg-6 form-front">
                <?php
                $gravity = get_field('contact_form');
                echo do_shortcode('[gravityform id="'.$gravity.'" title="false" description="false" ajax="true"]') ?>
            </div>
        </div>
    </div>
</section>