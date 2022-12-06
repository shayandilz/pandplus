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
                $i = -1;
                $list_services = get_field('services_list');
                if ($list_services) :
                    foreach ($list_services as $post):
                        $i++;
                        setup_postdata($post); ?>
                        <article class="col row align-items-start mx-0 my-2 my-lg-0 animate__animated animate__fadeInDown animate__delay-<?php echo $i; ?>s">
                            <div style="width: 94px;height: 94px">
                                <?= get_field('service_icon'); ?>
                            </div>
                            <div class="col-12">
                                <a class="text-black " href="<?php the_permalink(); ?>">
                                    <h4 class="fw-bolder title-card py-3 text-danger">
                                        <?= get_the_title(); ?>
                                        <span>> </span>
                                    </h4>
                                    <p class="text-justify">
                                        <?= wp_trim_words(get_the_content(), 18); ?>
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