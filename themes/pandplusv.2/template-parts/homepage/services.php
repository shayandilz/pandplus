<!--    services -->
<div class="bg-warning py-4">
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 row justify-content-center py-3">
                <div class="col-lg-6 col-12 text-center pt-5 pt-lg-0">
                    <p class="fs-4 text-danger">
                        <?php the_field('service_title'); ?>
                    </p>
                    <h3 class="fs-2 fw-bold text-danger">
                        <?php the_field('service_text'); ?>
                    </h3>
                </div>
            </div>
            <div class="col-12 col-lg-10 row row-cols-1 row-cols-lg-3 py-4">
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
</div>