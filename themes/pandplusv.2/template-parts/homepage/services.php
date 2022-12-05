<!--    services -->
<section class="bg-warning py-3">
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 row justify-content-center py-3 py-lg-5">
                <div class="col-lg-10 col-12 text-center pt-5 pt-lg-0 row justify-content-center">
                    <h3 class="fs-2 fw-bolder text-danger py-3">
                        <?php the_field('service_title'); ?>
                    </h3>
                    <p class="fs-5 text-danger lh-lg text-justify text-lg-center">
                        <?php the_field('service_text'); ?>
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-10 row row-cols-1 row-cols-lg-3 py-5">
                <?php
                $list_services = get_field('services_list');
                if ($list_services) :
                    foreach ($list_services as $post):
                        setup_postdata($post);
                        get_template_part('template-parts/service-card');
                        endforeach;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
</section>