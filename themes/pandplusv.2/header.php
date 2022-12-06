<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZTJDKQXKFQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-ZTJDKQXKFQ');
    </script>
    <meta charset="UTF-8">
    <meta name="keywords" content="Digify website">
    <meta name="description" content="">
    <meta name="author" content="EJ">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="sabavision_advertiser_id" content="01862141-bc61-4233-ae52-14fa3352b001"/>
    <script src="https://plus.sabavision.com/dmp/dox/events.min.js"></script>
    <script>__SabaEvents.initialize()</script>
    <meta name="google-site-verification" content="yrAbFPNW03P6nVf3eS5Cdb_SsSG1uxAK4Yp7JHyKomM"/>
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5JCSSNW');</script>
    <!-- End Google Tag Manager -->
    <!--    yektanet script -->
    <script> !function (t, e, n) {
            t.yektanetAnalyticsObject = n, t[n] = t[n] || function () {
                t[n].q.push(arguments)
            }, t[n].q = t[n].q || [];
            var a = new Date,
                r = a.getFullYear().toString() + "0" + a.getMonth() + "0" + a.getDate() + "0" + a.getHours(),
                c = e.getElementsByTagName("script")[0], s = e.createElement("script");
            s.id = "ua-script-NMiTglkd";
            s.dataset.analyticsobject = n;
            s.async = 1;
            s.type = "text/javascript";
            s.src = "https://cdn.yektanet.com/rg_woebegone/scripts_v3/NMiTglkd/rg.complete.js?v=" + r, c.parentNode.insertBefore(s, c)
        }(window, document, "yektanet"); </script>
    <!--    yektanet script -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-241604640-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-241604640-1');
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JCSSNW"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<!-- Navbar STart -->
<header class="position-relative">
    <div class="position-absolute top-menu z-top py-2 animate__animated animate__fadeInDown animate__delay-1s">
        <div class="container justify-content-center justify-content-end justify-content-lg-center d-flex gap-3 align-items-center px-2">
            <div class="d-flex col-11 col-lg-9 gap-3 justify-content-end justify-content-lg-start">
                <a class="text-end text-lg-start" href="<?php echo esc_url(get_home_url()) ?>">
                    <?php
                    $footer_logo = get_field('footer_logo', 'option');
                    ?>
                    <img class="lazy" width="40" height="auto" src="<?= $footer_logo['url'] ?>"
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
            <button rel="nofollow" type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    class="btn btn-white px-3 py-2 d-none d-lg-inline ">
                دریافت مشاوره
            </button>
        </div>


    </div>
    <a href="#cd-nav" rel="nofollow"
       class="cd-nav-trigger position-fixed z-top rounded-circle overflow-hidden animate__animated animate__fadeInLeft animate__delay-3s my-1">
        <span class="cd-nav-icon position-absolute start-50 top-50"></span>

        <svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
            <circle fill="transparent" stroke="#656e79" stroke-width="1" cx="27" cy="27" r="25"
                    stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
        </svg>
    </a>
    <div id="cd-nav" class="cd-nav position-fixed top-0 end-0 h-100 w-100 overflow-hidden">
        <!--    desktop menu-->
        <div class="d-none d-lg-block h-100 mt-5 ">
            <?php get_template_part('template-parts/layout/header/desktop'); ?>
        </div><!--    mobile menu-->
        <div class="d-grid d-lg-none">
            <?php get_template_part('template-parts/layout/header/mobile'); ?>
        </div>
    </div>
</header>

<!--left social and call button area -->
<!--    <div class="call vh-100 text-center d-flex flex-column justify-content-end gap-5">-->
<!--        <div class="d-md-flex flex-column justify-content-evenly gap-5 d-none">-->
<!--            <a href="">Inst.</a>-->
<!--            <a href="">Tw. </a>-->
<!--            <a href="">Fb. </a>-->
<!--            <a href="">Follow Us</a>-->
<!--        </div>-->
<!---->
<!--        <a href="#" class="btn bg-secondary p-3 rounded-circle my-5">-->
<!--            <svg  xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">-->
<!--                <path d="M16.45 21.75C15.32 21.75 14.13 21.48 12.9 20.96C11.7 20.45 10.49 19.75 9.31 18.9C8.14 18.04 7.01 17.08 5.94 16.03C4.88 14.96 3.92 13.83 3.07 12.67C2.21 11.47 1.52 10.27 1.03 9.11C0.51 7.87 0.25 6.67 0.25 5.54C0.25 4.76 0.39 4.02 0.66 3.33C0.94 2.62 1.39 1.96 2 1.39C2.77 0.63 3.65 0.25 4.59 0.25C4.98 0.25 5.38 0.34 5.72 0.5C6.11 0.68 6.44 0.95 6.68 1.31L9 4.58C9.21 4.87 9.37 5.15 9.48 5.43C9.61 5.73 9.68 6.03 9.68 6.32C9.68 6.7 9.57 7.07 9.36 7.42C9.21 7.69 8.98 7.98 8.69 8.27L8.01 8.98C8.02 9.01 8.03 9.03 8.04 9.05C8.16 9.26 8.4 9.62 8.86 10.16C9.35 10.72 9.81 11.23 10.27 11.7C10.86 12.28 11.35 12.74 11.81 13.12C12.38 13.6 12.75 13.84 12.97 13.95L12.95 14L13.68 13.28C13.99 12.97 14.29 12.74 14.58 12.59C15.13 12.25 15.83 12.19 16.53 12.48C16.79 12.59 17.07 12.74 17.37 12.95L20.69 15.31C21.06 15.56 21.33 15.88 21.49 16.26C21.64 16.64 21.71 16.99 21.71 17.34C21.71 17.82 21.6 18.3 21.39 18.75C21.18 19.2 20.92 19.59 20.59 19.95C20.02 20.58 19.4 21.03 18.68 21.32C17.99 21.6 17.24 21.75 16.45 21.75ZM4.59 1.75C4.04 1.75 3.53 1.99 3.04 2.47C2.58 2.9 2.26 3.37 2.06 3.88C1.85 4.4 1.75 4.95 1.75 5.54C1.75 6.47 1.97 7.48 2.41 8.52C2.86 9.58 3.49 10.68 4.29 11.78C5.09 12.88 6 13.95 7 14.96C8 15.95 9.08 16.87 10.19 17.68C11.27 18.47 12.38 19.11 13.48 19.57C15.19 20.3 16.79 20.47 18.11 19.92C18.62 19.71 19.07 19.39 19.48 18.93C19.71 18.68 19.89 18.41 20.04 18.09C20.16 17.84 20.22 17.58 20.22 17.32C20.22 17.16 20.19 17 20.11 16.82C20.08 16.76 20.02 16.65 19.83 16.52L16.51 14.16C16.31 14.02 16.13 13.92 15.96 13.85C15.74 13.76 15.65 13.67 15.31 13.88C15.11 13.98 14.93 14.13 14.73 14.33L13.97 15.08C13.58 15.46 12.98 15.55 12.52 15.38L12.25 15.26C11.84 15.04 11.36 14.7 10.83 14.25C10.35 13.84 9.83 13.36 9.2 12.74C8.71 12.24 8.22 11.71 7.71 11.12C7.24 10.57 6.9 10.1 6.69 9.71L6.57 9.41C6.51 9.18 6.49 9.05 6.49 8.91C6.49 8.55 6.62 8.23 6.87 7.98L7.62 7.2C7.82 7 7.97 6.81 8.07 6.64C8.15 6.51 8.18 6.4 8.18 6.3C8.18 6.22 8.15 6.1 8.1 5.98C8.03 5.82 7.92 5.64 7.78 5.45L5.46 2.17C5.36 2.03 5.24 1.93 5.09 1.86C4.93 1.79 4.76 1.75 4.59 1.75ZM12.95 14.01L12.79 14.69L13.06 13.99C13.01 13.98 12.97 13.99 12.95 14.01Z" fill="white"/>-->
<!--            </svg>-->
<!--        </a>-->
<!--    </div>-->
<a href="#" rel="nofollow" class="btn backTo_Top position-fixed bg-secondary text-white rounded-circle pt-1 shadow pb-2"><i
            class="bi bi-arrow-up"></i></a>
<main class="container-fluid m-0 p-0 position-relative overflow-hidden">



