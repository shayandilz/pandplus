<?php
/* Template Name: Contact Service */

get_header();

?>


    <section class="container z-top position-relative default-margin-top min-vh-100">
        <div class="row mx-1 justify-content-lg-start justify-content-center align-items-start">
            <div class="col-12">
                <h1 class="py-2 text-white"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item border-0 bg-transparent">
                    <div class="row gap-lg-0 gap-3">
                        <h2 class="accordion-header col-12 col-lg-3" id="headingTwo">
                            <button class="accordion-button collapsed background-radial rounded-3 w-100 fs-5" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                فرم درخواست دیجیتال مارکتینگ
                            </button>
                        </h2>
                        <h2 class="accordion-header col-12 col-lg-3" id="headingOne">
                            <button class="accordion-button collapsed background-radial rounded-3 w-100 fs-5" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                فرم درخواست طراحی سایت
                            </button>
                        </h2>
                        <h2 class="accordion-header col-12 col-lg-3" id="headingOne">
                            <button class="accordion-button collapsed background-radial rounded-3 w-100 fs-5" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                فرم درخواست بریف بروشور
                            </button>
                        </h2>
                        <h2 class="accordion-header col-12 col-lg-3" id="headingOne">
                            <button class="accordion-button collapsed background-radial rounded-3 w-100 fs-5" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                فرم درخواست بریف ست اداری
                            </button>
                        </h2>

                    </div>
                    <div class="row">
                        <div id="collapseOne" class="accordion-collapse collapse my-4 col-12 " aria-labelledby="headingOne"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body text-white-50 border border-light rounded-1">
                                <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]') ?>
                            </div>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse my-4 col-12" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body text-white-50 border border-light rounded-1">
                                <?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]') ?>
                            </div>
                        </div>
                        <div id="collapseThree" class="accordion-collapse collapse my-4 col-12" aria-labelledby="headingThree"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body text-white-50 border border-light rounded-1">
                                <?php echo do_shortcode('[gravityform id="6" title="false" description="false" ajax="true"]') ?>
                            </div>
                        </div>
                        <div id="collapseFour" class="accordion-collapse collapse my-4 col-12" aria-labelledby="collapseFour"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body text-white-50 border border-light rounded-1">
                                <?php echo do_shortcode('[gravityform id="7" title="false" description="false" ajax="true"]') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
