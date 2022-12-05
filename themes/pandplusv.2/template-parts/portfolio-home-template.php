<article class="row swiper-slide px-0 justify-content-center">
    <div class="col-12">
        <a href="#">
            <div class="ratio ratio-1x1">
                <img class="image-rounded object-fit" src="<?php echo get_the_post_thumbnail_url(); ?>"
                     title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="d-flex pt-3 gap-3 align-items-center">
                <!--                category-->
                <p class="m-0">
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
                    foreach ($tour_pages as $tour){
                        echo $tour->post_title . ' ';
                    }
                    ?>
                </p>
                <hr class="vr">
                <p class="m-0">
                    <?php get_template_part('template-parts/icons/clock'); ?>
                    <!--                    date-->
                    <span>۱۴۰۰ بهمن ۲۲</span>
                </p>
            </div>
            <h4 class="fw-bolder pt-3">
                <?php echo get_the_title(); ?>
            </h4>
        </a>
        <!--            services -->
        <div class="d-flex gap-3 rounded bg-info align-items-center my-3 px-3 py-1 text-white">
            <h6 class="m-0 ">خدمات ارائه شده</h6>
            <hr class="vr">
            <!--                services icon-->
            <div class="d-flex gap-3 text-center">
                <?php
                foreach ($tour_pages as $tour){ ?>
                    <a href="<?php echo get_permalink($tour->ID); ?>">
                        <div style="width: 20px;height: 20px">
                            <?php echo get_field('service_icon', $tour->ID); ?>
                        </div>

                    </a>
                <?php } ?>
            </div>
        </div>
</article>