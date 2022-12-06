<div class="cd-navigation-wrapper d-flex align-items-center justify-content-center container">
    <div class="row w-100">
        <nav class="menu_nav col-12 col-lg ">
            <ul class="service_archive_list list-unstyled d-flex gap-3 display-6 flex-column fw-bold desktop-menu text-center text-lg-start">
                <?php
                global $wp_query;
                $pageID = $wp_query->post->ID;
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
                        <li data-list="<?= $post->ID; ?>"
                            class="<?php echo ($pageID == $post->ID) ? 'active' : '' ?> py-1 lazy"
                        >
                            <a class="text-white" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </li>
                    <?php endwhile;
                endif;
                wp_reset_postdata(); ?>

            </ul>
        </nav>
        <div class="col-8 position-relative d-flex align-items-center service_show d-none d-lg-block">
            <?php
            $loop_services = new WP_Query($services);
            if ($loop_services->have_posts()) : $i = 0;
                /* Start the Loop */
                while ($loop_services->have_posts()) :
                    $loop_services->the_post(); ?>
                    <div class="services-<?= $post->ID; ?> z-top w-100 position-absolute <?php echo ($pageID == $post->ID) ? 'show' : '' ?> ">
                        <img class="img-fluid w-100 overflow-hidden image-rounded-min object-fit"
                             src="<?php
                             if (has_post_thumbnail($post->ID)) {
                                 echo get_the_post_thumbnail_url();
                             } else {
                                 echo esc_url(site_url()) . "/wp-content/uploads/2022/08/doc.jpg";
                             }
                             ?>"
                             alt="<?php the_title(); ?>">
                    </div>
                <?php endwhile;
            endif;
            wp_reset_postdata(); ?>

        </div>
    </div>
</div>