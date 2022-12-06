<!--    services -->
<section class="bg-warning py-3">
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 row justify-content-center py-3 py-lg-5">
                <div class="col-lg-10 col-12 text-center pt-5 pt-lg-0 row justify-content-center">
                    <h3 class="fs-1 fw-bold text-danger py-3">
                        <?php the_field('service_title'); ?>
                    </h3>
                    <p class="fs-6 text-danger lh-lg text-justify text-lg-center">
                        <?php the_field('service_text'); ?>
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-10 row row-cols-1 row-cols-lg-3 py-3">
                <?php
                $i = -1;
                $list_services = get_field('services_list');
                if ($list_services) :
                    foreach ($list_services as $post):
                        $i++;
                        setup_postdata($post); ?>
                        <article class=" mx-0 my-3 my-lg-3 animate__animated animate__fadeInDown animate__delay-<?php echo $i; ?>s">
                            <div class="m-lg-0 m-auto" style="width: 94px;height: 94px">
                                <?= get_field('service_icon'); ?>
                            </div>
                            <div class="pt-2">
                                <a class="text-black " href="<?php the_permalink(); ?>">
                                    <h4 class="fw-bolder text-center text-lg-start title-card py-2 py-lg-4 text-danger">
                                        <?= get_the_title(); ?>
                                        <span>> </span>
                                    </h4>
                                    <p class="text-justify">
                                        <?= the_excerpt(); ?>
                                    </p>
                                </a>
                        </article>
                    <?php
                    endforeach;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
</section>