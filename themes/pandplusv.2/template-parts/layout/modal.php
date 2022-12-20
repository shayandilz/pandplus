<div class="modal fade contact-form" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" >
        <div class="modal-content image-rounded-min bg-secondary" >
                <div class="modal-body col-12">
                    <div class="modal-header border-0 pb-5 pt-2">
                        <h5 class="modal-title text-danger fs-3" id="exampleModalLabel">دریافت مشاوره</h5>
                        <a href="tel:<?php the_field('call_number_service', 'option') ?>" class="d-lg-none me-5 bg-success text-secondary px-3 pt-2 lh-lg fw-bold rounded">
                            <?php the_field('call_number_service', 'option') ?>
                        </a>
                    </div>
                    <?php echo do_shortcode('[gravityform id="8" title="false" description="false" ajax="true"]') ?>
                    <a href="tel:<?php the_field('call_number_service', 'option') ?>" class="d-none d-lg-inline position-absolute bottom-0 end-0 me-4 mb-4 bg-success text-secondary px-3 pt-2 lh-lg fw-bold rounded">
                        <?php the_field('call_number_service', 'option') ?>
                    </a>
                </div>
                    <button type="button"
                            class="bg-transparent position-absolute top-0 end-0 border-0 text-danger z-top me-4 mt-4 pt-1"
                            data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </button>
        </div>
    </div>
</div>