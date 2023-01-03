<!--logo-->
<a class="text-center bg-danger pt-2 pb-4" href="<?php echo esc_url(get_home_url()) ?>">
    <?php
    $footer_logo = get_field('footer_logo', 'option');
    ?>
    <img class="lazy" width="65px" height="65px" src="<?= $footer_logo['url'] ?>"
         alt="<?= get_bloginfo('name'); ?>">
    <br>
    آژانس دیجیتال مارکتینگ پندپلاس
</a>
<!--tab menu-->
<nav class="vw-100 d-flex justify-content-center bg-danger pt-3">
    <div class="d-flex nav nav-tabs flex-nowrap" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
                role="tab" aria-controls="nav-home" aria-selected="true">خانه
        </button>
        <button class="nav-link" id="nav-service-tab" data-bs-toggle="tab" data-bs-target="#nav-service" type="button"
                role="tab" aria-controls="nav-service" aria-selected="false">خدمات
        </button>
        <button class="nav-link" id="nav-portfolio-tab" data-bs-toggle="tab" data-bs-target="#nav-portfolio"
                type="button"
                role="tab" aria-controls="nav-portfolio" aria-selected="false">نمونه کار
        </button>
        <button class="nav-link" id="nav-blog-tab" data-bs-toggle="tab" data-bs-target="#nav-blog" type="button"
                role="tab" aria-controls="nav-blog" aria-selected="false">بلاگ
        </button>

    </div>
</nav>
<!--tab data-->
<div class="tab-content menuHeader" id="nav-tabContent">
    <div class="container tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
         tabindex="0">
        <div class="d-flex align-items-center justify-content-evenly gap-2 text-center mt-5">
            <a class="btn btn-dark px-4 py-2 fs-5 rounded-1"
               href="<?php echo esc_url(get_home_url()) ?>">
                صفحه اصلی
            </a>
            <?php
            $footer_button = get_field('footer_button', 'option');
            if ($footer_button): ?>
                <a rel="nofollow" type="button"
                   id="cta-event"
                   data-bs-toggle="modal"
                   data-bs-target="#exampleModal"
                   href="<?php echo esc_url($footer_button['link']); ?>"
                   class="btn btn-dark px-4 py-2 fs-5 rounded-1">
                    <?php echo esc_html($footer_button['text']); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <div class="container tab-pane fade" id="nav-service" role="tabpanel" aria-labelledby="nav-service-tab"
         tabindex="0">
        <ul class="list-unstyled my-5 pb-5 row justify-content-center align-items-center text-center">
            <?php
            $services_heaeder = array(
                'post_type' => 'services',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
                'ignore_sticky_posts' => true
            );
            $loop_services = new WP_Query($services_heaeder);
            if ($loop_services->have_posts()) : $i = 0;
                /* Start the Loop */
                while ($loop_services->have_posts()) :
                    $loop_services->the_post(); ?>
                    <li class="col-10 col-lg-8 display-6 py-2 d-flex gap-4 justify-content-start align-items-center">
                        <div style="width: 44px;height: 44px">
                            <?= get_field('service_icon'); ?>
                        </div>
                        <a class="text-dark fs-4 fw-bold" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </li>
                <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
            <div class="d-flex align-items-center justify-content-evenly gap-2 text-center mt-4 ">
                                 <a class="btn btn-dark px-4 py-2 fs-5 rounded-1"
                                    href="<?php echo esc_url('/services') ?>">
                                     خدمات
                                 </a>
                <?php
                $footer_button = get_field('footer_button', 'option');
                if ($footer_button): ?>
                    <a rel="nofollow" type="button"
                       id="cta-event"
                       data-bs-toggle="modal"
                       data-bs-target="#exampleModal"
                       href="<?php echo esc_url($footer_button['link']); ?>"
                       class="btn btn-dark px-4 py-2 fs-5 rounded-1">
                        <?php echo esc_html($footer_button['text']); ?>
                    </a>
                <?php endif; ?>
            </div>
        </ul>
    </div>
    <div class="container tab-pane fade" id="nav-portfolio" role="tabpanel" aria-labelledby="nav-portfolio-tab"
         tabindex="0">
        <ul class="row list-unstyled my-5 g-3 pb-5">
            <?php
            $portfolio = array(
                'post_type' => 'portfolio',
                'post_status' => 'publish',
                'posts_per_page' => '6',
                'ignore_sticky_posts' => true
            );
            $loop_portfolio = new WP_Query($portfolio);
            if ($loop_portfolio->have_posts()) : $i = 0;
                /* Start the Loop */
                while ($loop_portfolio->have_posts()) :
                    $loop_portfolio->the_post(); ?>
                    <li class="col-6 d-flex flex-column gap-3">
                        <a href="<?php echo get_the_permalink(); ?>">
                            <img class="img-fluid overflow-hidden image-rounded-min object-fit lazy"
                                 src="<?php
                                 if (has_post_thumbnail($loop_portfolio->ID)) {
                                     echo get_the_post_thumbnail_url();
                                 } else {
                                     echo esc_url(site_url()) . "/wp-content/uploads/2022/08/doc.jpg";
                                 }
                                 ?>"
                                 alt="<?php the_title(); ?>">
                        </a>
                        <h6 class="text-center fw-bold fs-6 text-danger"><?php echo get_the_title(); ?></h6>
                    </li>
                <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
            <div class="d-flex align-items-center justify-content-evenly gap-2 text-center">
                <a class="btn btn-dark px-4 py-2 fs-5 rounded-1"
                   href="<?php echo esc_url('/portfolio') ?>">
                    نمونه کار‌ها
                </a>
                <?php
                $footer_button = get_field('footer_button', 'option');
                if ($footer_button): ?>
                    <a rel="nofollow" type="button"
                       id="cta-event"
                       data-bs-toggle="modal"
                       data-bs-target="#exampleModal"
                       href="<?php echo esc_url($footer_button['link']); ?>"
                       class="btn btn-dark px-4 py-2 fs-5 rounded-1">
                        <?php echo esc_html($footer_button['text']); ?>
                    </a>
                <?php endif; ?>
            </div>
        </ul>
    </div>
    <div class="container tab-pane fade overflow-scroll" id="nav-blog" role="tabpanel" aria-labelledby="nav-blog-tab"
         tabindex="0">
        <ul class="row list-unstyled my-5 pb-5">
            <?php
            $post = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => '6',
                'ignore_sticky_posts' => true
            );
            $loop_post = new WP_Query($post);
            if ($loop_post->have_posts()) : $i = 0;
                /* Start the Loop */
                while ($loop_post->have_posts()) :
                    $loop_post->the_post(); ?>
                    <li class="col-6 d-flex flex-column gap-3">
                        <a href="<?php the_permalink(); ?>">
                        <img class="img-fluid overflow-hidden image-rounded-blog object-fit lazy ratio-1x1"
                             src="<?php
                             if (has_post_thumbnail($post->ID)) {
                                 echo get_the_post_thumbnail_url();
                             } else {
                                 echo esc_url(site_url()) . "/wp-content/uploads/2022/08/doc.jpg";
                             }
                             ?>"
                             alt="<?php the_title(); ?>">
                        <h6 class="text-center fs-6 fw-bold text-danger"><?php echo get_the_title(); ?></h6>
                        </a>
                    </li>
                <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
            <div class="d-flex  align-items-center justify-content-evenly gap-2 text-center mt-2">
                <a class="btn btn-dark px-4 py-2 fs-5 rounded-1"
                   href="<?php echo site_url('/بلاگ'); ?>">
                     بلاگ
                </a>
                <?php
                $footer_button = get_field('footer_button', 'option');
                if ($footer_button): ?>
                    <a rel="nofollow" type="button"
                       id="cta-event"
                       data-bs-toggle="modal"
                       data-bs-target="#exampleModal"
                       href="<?php echo esc_url($footer_button['link']); ?>"
                       class="btn btn-dark px-4 py-2 fs-5 rounded-1">
                        <?php echo esc_html($footer_button['text']); ?>
                    </a>
                <?php endif; ?>
            </div>
        </ul>
    </div>
</div>
<!--menu mobile footer -->
<div class="py-3 w-100 bg-danger position-fixed bottom-0 z-top">
    <h5 class="text-center text-secondary fw-bold">آدرس پستی</h5>
    <address class="px-5 text-center text-white">
        <?= get_field('address', 'option') ?>
    </address>
    <div class="d-flex justify-content-center gap-3">
        <?php get_template_part('template-parts/layout/social') ?>
    </div>
</div>