<div class="position-absolute top-menu z-top py-2 animate__animated animate__fadeInDown animate__delay-1s">
    <div class="container justify-content-end justify-content-lg-center d-flex gap-3 align-items-center px-2">
        <div class="d-flex col-11 col-lg-9 gap-3 justify-content-end justify-content-lg-start">
            <a class="text-end text-lg-start logo_header" href="<?php echo esc_url(get_home_url()); ?>">
                <?php
                $header_logo = get_field('header_logo', 'option');
                ?>
                <img width="40" height="40" src="<?= $header_logo['url'] ?>"
                     alt="<?= get_bloginfo('name'); ?>">
            </a>
            <hr class="vr text-white my-auto d-none d-lg-inline">
            <div class="d-lg-flex d-none">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation',
                    'menu_class' => 'list-unstyled d-flex align-items-center gap-2 m-0',
                    'container' => false,
                    'item_class' => 'nav-item',
                    'link_class' => 'nav-link fs-6 py-1',
                    'depth' => 1
                ));
                ?>
            </div>
        </div>
        <a href="tel:<?php the_field('call_number_service', 'option') ?>"
           id="cta-event"
           class="btn btn-white px-4 py-2 fs-6 d-none d-lg-inline ">
            دریافت مشاوره
        </a>
    </div>
</div>