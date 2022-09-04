<a href="#first_section" class="d-flex justify-content-center align-items-center w-100 d-lg-none mouse-down">
    <svg width="40px" height="100%" viewBox="0 0 247 390" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
        <path id="wheel" d="M123.359,79.775l0,72.843" style="fill:none;stroke:#fff;stroke-width:20px;"/>
        <path id="mouse" d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z" style="fill:none;stroke:#fff;stroke-width:20px;"/>
    </svg>
</a>
<div class="hero z-top position-relative overflow-hidden vh-100 d-flex justify-content-center align-items-center">
    <div id="tsparticles"></div>
    <div class="position-absolute top-0 bottom-0 w-100 h-100 bg__metah w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="svg d-lg-none d-block">
            <?php
            get_template_part('template-parts/SVG/pandplus');
            ?>
        </div>
        <video class="d-none d-lg-block" preload="true" width="1920" height="1080" playsinline  autoplay loop muted style="z-index: -1;min-width: 100%; min-height: 100%; ">
<!--            <source src="--><?php //echo esc_url(site_url()); ?><!--/wp-content/uploads/2022/08/Header-Site-Ae.webm" type="video/webm">-->
            <source src="<?php echo esc_url(site_url()); ?>/wp-content/uploads/2022/08/Header-Site-Ae.mp4" type="video/mp4">
        </video>

    </div>
</div>
