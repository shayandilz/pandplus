<div class="row pt-5 align-items-center justify-content-center bg-info text-white">
    <div class="container col col-lg-11 row justify-content-center pt-5 px-0">
        <div class=" pt-3 pt-lg-5 col col-lg-10 row px-0">
            <div class="col-lg-4 col-12 d-flex flex-column gap-3 pb-3 pb-lg-0 pe-lg-4">
                <a class="text-center text-lg-start" href="<?php echo esc_url(get_home_url()) ?>">
                    <?php
                    $footer_logo = get_field('footer_logo', 'option');
                    ?>
                    <img width="65" height="65" src="<?= $footer_logo['url'] ?>"
                         alt="<?= get_bloginfo('name'); ?>">
                </a>
                <div class="pt-2 text-justify small fw-lighter text-semi-light">
                    <?php the_field('footer_text_lower', 'option'); ?>
                </div>
            </div>
            <div class="col-lg col-12 my-2 my-lg-0">
                <p class="fw-bolder pb-3 ">
                    <?php
                    $locations = get_nav_menu_locations();
                    $menu = wp_get_nav_menu_object($locations['footerLocationOne']);
                    echo $menu->name;
                    ?>
                </p>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footerLocationOne',
                    'menu_class' => 'list-unstyled pe-0 small fw-lighter text-semi-light d-flex flex-lg-column flex-wrap gap-3',
                    'container' => false,
                    'menu_id' => 'navbarTogglerMenu',
                    'item_class' => 'nav-item',
                    'link_class' => 'lazy text-decoration-none',
                    'depth' => 1,
                ));
                ?>

            </div>
            <div class="col-lg col-12 my-2 my-lg-0">
                <?php
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object($locations['footerLocationTwo']);
                if ($menu) :
                    ?>
                    <p class="fw-bolder pb-3">
                        <?= $menu->name; ?>
                    </p>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footerLocationTwo',
                        'menu_class' => 'list-unstyled pe-0 small fw-lighter text-semi-light d-flex flex-lg-column flex-wrap  gap-3',
                        'container' => false,
                        'menu_id' => 'navbarTogglerMenu',
                        'item_class' => 'nav-item',
                        'link_class' => 'lazy text-decoration-none',
                        'depth' => 1,
                    ));
                endif;
                ?>
            </div>
            <div class="col-lg-4 col-12 z-top">
                <?php
                $google_map_iframe = get_field('google_map_iframe', 'option');
                if ($google_map_iframe): ?>
                    <div class="position-relative rounded h-100">
                        <?php echo $google_map_iframe; ?>
                        <a href="https://goo.gl/maps/2dUeBwPYSwTo8tNE7"
                           class="btn bg-white d-flex justify-content-between align-items-center position-absolute bottom-0 mb-4 mx-3 w-auto end-0 start-0">
                            باز کردن نقشه
                            <i class="bi bi-box-arrow-up-right"></i>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12 col-lg-10 row justify-content-center py-4 px-0 align-items-center">
            <div class="col-12 col-lg-9 fw-lighter text-semi-light fs-6 text-start">
                <div class="border-2 border-bottom pb-1"></div>
                <div class="pt-3 text-center text-lg-start">
                    <?php echo '© &nbsp'. date("Y") . '&nbsp&nbsp&nbsp'; the_field('copyright_text', 'option'); ?>
                </div>
            </div>
            <div class="col-12 col-lg-3 gap-2 text-center pb-5 pb-lg-0">
                <p class="text-center text-lg-start m-0 mb-2 pt-3 pt-lg-0">مارا دنبال کنید</p>
                <?php get_template_part('template-parts/layout/social'); ?>
            </div>
        </div>
    </div>
</div>