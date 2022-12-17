<article class="row swiper-slide px-0 justify-content-center">
    <div class="col-12">
        <a href="<?php the_permalink();?>">
            <div class="ratio ratio-1x1">
                <img class="image-rounded object-fit" src="<?php echo get_the_post_thumbnail_url(); ?>"
                     title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="pt-1 gap-2 align-items-center">
<!--                <hr class="vr d-none d-lg-inline">-->
                <p class="m-0 fw-light small py-2">
                    <?php get_template_part('template-parts/icons/clock'); ?>
                    <!--                    date-->
                    <?php echo get_the_date('d  F , Y'); ?>
                </p>
            </div>
            <h4 class="fw-bolder fs-5">
                <?php echo get_the_title(); ?>
            </h4>
        </a>
        <!--            services -->
        <div class="d-flex border-top border-1 border-white gap-2 align-items-center mt-1 px-2 bg-info text-white">
            <h6 class="m-0 fs-6">خدمات</h6>
            <hr class="vr">
            <!--                services icon-->
            <div class="d-flex gap-2 text-center">
                <?php
                $tour_pages = get_posts(
                    array(
                        'post_type' => 'services',
                        'meta_query' => array(
                            array(
                                'key' => 'projects_services', // name of custom field
                                'value' => '"' . get_the_ID() . '"',
                                'compare' => 'LIKE'
                            )
                        )
                    )
                );
                foreach ($tour_pages as $tour){ ?>
                    <a title="<?= $tour->post_title ?>" href="<?php echo get_permalink($tour->ID); ?>">
                        <div style="width: 20px;height: 20px">
                            <?php echo get_field('service_icon', $tour->ID); ?>
                        </div>

                    </a>
                <?php } ?>
            </div>
        </div>
</article>