<?php
$services_list = [7470,7469];
?>

<div class="cd-navigation-wrapper vh-100 d-flex flex-column justify-content-center container">
    <div class="row w-100 mb-4">
        <nav class="menu_nav col">
            <ul class="menu list-unstyled d-flex gap-3 display-6 flex-column fw-bold desktop-menu">
                <li <?php echo is_front_page() ? 'class="current-menu-item"' : '';  ?> >
                    <a class="text-black" href="<?php echo esc_url(get_home_url()) ?>">خانه</a>
                </li>
                <li class="<?= (in_array(get_queried_object()->ID, $services_list)) || get_queried_object()->ID == 7373 ? 'current-menu-item' : ''; ?>" data-list="service-menu">
                    <a class="text-black" href="<?php echo esc_url('/services'); ?>">خدمات</a>
                </li>
                <li data-list="portfolio-menu">
                    <a class="text-black" href="/">نمونه کار</a>
                </li>
                <li data-list="blog-menu">
                    <a class="text-black" href="<?php echo esc_url('/blog') ?>">بلاگ</a>
                </li>
            </ul>
        </nav>
        <div class="col-8 position-relative d-flex align-items-center">
            <div class="services-menu position-absolute w-100">
                <ul class="list-unstyled justify-content-start d-flex flex-wrap row-cols-2">
                    <?php
                    $services = array(
                        'post_type' => 'services',
                        'post_status' => 'publish',
                        'posts_per_page' => '-1',
                        'ignore_sticky_posts' => true
                    );
                    $loop_services = new WP_Query($services);
                    if ($loop_services->have_posts()) : $i = 0;
                        /* Start the Loop */
                        while ($loop_services->have_posts()) :
                            $loop_services->the_post(); ?>
                            <li class="fs-3 py-2 d-flex gap-4 align-items-center">
                                <div style="width: 44px;height: 44px">
                                    <?= get_field('service_icon'); ?>
                                </div>
                                <a class="text-danger fw-bold" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </li>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                </ul>
            </div>
            <div class="portfolio-menu position-absolute">
                <ul class="row list-unstyled">
                    <?php
                    $portfolio = array(
                        'post_type' => 'portfolio',
                        'post_status' => 'publish',
                        'posts_per_page' => '3',
                        'ignore_sticky_posts' => true
                    );
                    $loop_portfolio = new WP_Query($portfolio);
                    if ($loop_portfolio->have_posts()) : $i = 0;
                        /* Start the Loop */
                        while ($loop_portfolio->have_posts()) :
                            $loop_portfolio->the_post(); ?>
                            <li class="col-4">
                                <a href="<?php the_permalink();?>">
                                    <img class="img-fluid overflow-hidden image-rounded-min object-fit lazy"
                                         src="<?php
                                         if (has_post_thumbnail($loop_portfolio->ID)) {
                                             echo get_the_post_thumbnail_url();
                                         } else {
                                             echo esc_url(site_url()) . "/wp-content/uploads/2022/08/doc.jpg";
                                         }
                                         ?>"
                                         alt="<?php the_title(); ?>">
                                    <h6 class="text-center fs-6 mt-2 fw-bold text-danger"><?php echo get_the_title(); ?></h6>
                                </a>
                            </li>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                </ul>
            </div>
            <div class="blog-menu position-absolute">
                <ul class="row list-unstyled">
                    <?php
                    $post = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => '3',
                        'ignore_sticky_posts' => true
                    );
                    $loop_post = new WP_Query($post);
                    if ($loop_post->have_posts()) : $i = 0;
                        /* Start the Loop */
                        while ($loop_post->have_posts()) :
                            $loop_post->the_post(); ?>
                            <li class="col-4">
                                <a href="<?php the_permalink(); ?>">
                                <img class="img-fluid overflow-hidden image-rounded-min object-fit lazy"
                                     src="<?php
                                     if (has_post_thumbnail($post->ID)) {
                                         echo get_the_post_thumbnail_url();
                                     } else {
                                         echo esc_url(site_url()) . "/wp-content/uploads/2022/08/doc.jpg";
                                     }
                                     ?>"
                                     alt="<?php the_title(); ?>">
                                    <h6 class="text-center fs-6 mt-2 fw-bold text-danger"><?php echo get_the_title(); ?></h6>
                                </a>
                            </li>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>

    </div>
    <div class="row mt-5">
        <div class="col-12">
            <div class="row gap-3 text-danger">
                <div class="col">
                    <h4>آدرس پستی</h4>
                    <p>
                        <?= get_field('address', 'option') ?>
                    </p>
                </div>
                <div class="col">
                    <h4>در تماس باشید</h4>
                    <p>
                        <a class="text-danger" href="tel:<?= get_field('call_number_service', 'option'); ?>"><?= get_field('call_number_service', 'option'); ?></a>
                    </p>
                </div>
                <div class="col">
                    <h4>ساعت کاری</h4>
                    <?= get_field('hour_shift', 'option') ?>
                </div>
                <div class="col">
                    <h4>شبکه های اجتماعی</h4>
                    <?php get_template_part('template-parts/layout/social'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

