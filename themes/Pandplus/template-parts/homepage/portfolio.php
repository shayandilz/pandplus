<section class="container-lg container-fluid py-5 z-top position-relative">
    <div class="text-center mb-4">
        <?php
        $port_title = get_field('home_port-title');
        $port_desc = get_field('home_port-desc');
        if ($port_title): ?>
            <p class="h2 fs-2 wow animate__animated animate__fadeInUp text-white">
                <?= $port_title ?>
            </p>
        <?php endif;
        if ($port_desc): ?>
            <div class="wow animate__animated animate__fadeInUp animate__delay-1s text-white">
                <?= $port_desc ?>
            </div>
        <?php endif; ?>
    </div>


    <div
            class="splide splide-customizable outside-pagination wow animate__animated animate__fadeIn animate__delay-1s"
            data-gap="24" data-perpage="4"
            data-pagination="true" data-arrow="false"
            aria-label="services slider">
        <div class="splide__track pb-5 wow animate__animated animate__fadeIn animate__delay-1s">
            <?php $post_type_obj = get_post_type_object('portfolio');
            $featured_posts = get_field('picked_portfolio');
            $args = array(
                'post_type' => 'portfolio',
                'fields' => 'ids',
                'posts_per_page' => 8,
                'post__in' => $featured_posts

            );
            $loop = new WP_Query($args);
            ?>
            <ul class="splide__list">
                <?php $loop = new WP_Query($args);
                if ($loop->have_posts()) : $i = 0;
                    /* Start the Loop */
                    while ($loop->have_posts()) :
                        $loop->the_post(); ?>
                        <li class="splide__slide">
                            <?php get_template_part('template-parts/portfolio-card'); ?>
                        </li>
                    <?php endwhile;
                endif;
                wp_reset_postdata() ?>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-6 position-relative text-center">
            <?php get_template_part('template-parts/button-animate'); ?>
            <a class="background-radial text-white btn btn-gold px-md-3 px-2 rounded-1"
               href="<?php echo get_post_type_archive_link('portfolio'); ?>">
                        <span class="d-inline">
                            همه نمونه کارها
                        <i class="bi bi-arrow-left ms-1"></i>
                        </span>
            </a>
        </div>
    </div>
</section>
