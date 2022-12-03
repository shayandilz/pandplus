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
                    $terms = get_the_terms($loop->ID, 'portfolio_categories');
                    foreach ($terms as $cd) {
                        echo $cd-> name;
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
            <h4 class="fw-bolder">
                <?php echo get_the_title(); ?>
            </h4>
        </a>
        <!--            services -->
        <div class="d-flex gap-3 rounded bg-info align-items-center my-3 px-4 py-1 text-white">
            <h6 class="m-0 ">خدمات ارائه شده</h6>
            <hr class="vr">
            <!--                services icon-->
            <div class="d-flex gap-3 text-center">
                <?php
                $terms = get_the_terms($loop->ID, 'portfolio_categories');
                foreach ($terms as $cd) {
//                    var_dump($cd);
                    ?>
                    <a href="#">
                        <?php
                        $image = get_field('service_svg', $cd->taxonomy . '_' . $cd->term_id);
                        echo $image;
                        ?>
                    </a>
                <?php } ?>
            </div>
        </div>
</article>