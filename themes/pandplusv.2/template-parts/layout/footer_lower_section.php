<div class="row pt-5 align-items-center justify-content-center">
    <div class="col-12 col-lg-10 row">
        <div class="col-lg-4 col-12 d-flex flex-column gap-3">
            <a href="<?php echo esc_url(get_home_url()) ?>">
                <?php
                $footer_logo = get_field('footer_logo', 'option');
                ?>
                <img class="lazy" width="65px" height="65px" src="<?= $footer_logo['url'] ?>"
                     alt="<?= get_bloginfo('name'); ?>">
            </a>
            <div class="pt-2 text-justify small fw-lighter text-semi-light">
                <?php the_field('footer_text_lower', 'option'); ?>
            </div>
            <?php
            $footer_button = get_field('footer_button', 'option');
            if ($footer_button): ?>
                <a href="<?php echo esc_url($footer_button['link']); ?>"
                   class="gradient btn text-white px-4 py-2 fs-5 rounded-1 w-50">
                    <?php echo esc_html($footer_button['text']); ?>
                </a>
            <?php endif; ?>
        </div>
        <div class="col-lg col-6">
            <h6 class="fw-bolder pb-3">
                <?php
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object($locations['footerLocationOne']);
                echo $menu->name;
                ?>
            </h6>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footerLocationOne',
                'menu_class' => 'list-unstyled pe-0 small fw-lighter text-semi-light d-flex flex-column gap-3',
                'container' => false,
                'menu_id' => 'navbarTogglerMenu',
                'item_class' => 'nav-item',
                'link_class' => 'lazy text-decoration-none text-black',
                'depth' => 1,
            ));
            ?>

        </div>
        <div class="col-lg col-6">
            <h6 class="fw-bolder pb-3">
                <?php
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object($locations['footerLocationOne']);
                echo $menu->name;
                ?>
            </h6>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footerLocationOne',
                'menu_class' => 'list-unstyled pe-0 small fw-lighter text-semi-light d-flex flex-column gap-3',
                'container' => false,
                'menu_id' => 'navbarTogglerMenu',
                'item_class' => 'nav-item',
                'link_class' => 'lazy text-decoration-none text-black',
                'depth' => 1,
            ));
            ?>

        </div>
        <div class="col-lg col-6">
            <h6 class="fw-bolder pb-3">
                <?php
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object($locations['footerLocationOne']);
                echo $menu->name;
                ?>
            </h6>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footerLocationOne',
                'menu_class' => 'list-unstyled pe-0 small fw-lighter text-semi-light d-flex flex-column gap-3',
                'container' => false,
                'menu_id' => 'navbarTogglerMenu',
                'item_class' => 'nav-item',
                'link_class' => 'lazy text-decoration-none text-black',
                'depth' => 1,
            ));
            ?>

        </div>
        <div class="col-lg-3 col-6">
            <?php
            $google_map_iframe = get_field('google_map_iframe', 'option');
            if ($google_map_iframe): ?>
                <div class="position-relative rounded-3">
                    <?php echo $google_map_iframe; ?>
                    <a href="#"
                       class="btn bg-white d-flex justify-content-between align-items-center position-absolute bottom-0 mb-4 mx-3 w-auto end-0 start-0">
                        باز کردن نقشه
                        <i class="bi bi-box-arrow-up-right"></i>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-12 col-lg-10 row justify-content-between py-4 align-items-center">
        <div class="col-10 fw-lighter text-semi-light fs-6 text-start ">
            <div class="border-2 border-bottom pb-4"></div>
            <div class="pt-2">
                <?php the_field('copyright_text', 'option'); ?>
            </div>
        </div>
        <div class="col-2 d-flex flex-column gap-2 align-items-start">
            مارا دنبال کنید
            <div class="d-inline-flex fs-3 gap-3">
                <a class="" href="<?= get_field('instagram', 'option') ?>">
                    <i class="bi bi-instagram"></i>
                </a>
                <a class="" href="<?= get_field('linkedin', 'option') ?>">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a class="" href="<?= get_field('telegram', 'option') ?>">
                    <i class="bi bi-telegram"></i>
                </a>
                <a class="" href="<?= get_field('twitter', 'option') ?>">
                    <i class="bi bi-twitter"></i>
                </a>
                <a class="" href="<?= get_field('youtube', 'option') ?>">
                    <i class="bi bi-youtube"></i>
                </a>
                <a class="" href="<?= get_field('aparat', 'option') ?>">
                    <i class="bi bi-wordpress"></i>
                </a>
            </div>
        </div>
    </div>
</div>