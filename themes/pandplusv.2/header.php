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
    <?php get_template_part('template-parts/layout/header/main'); ?>
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
<!--        </a>-->
<!--    </div>-->
<!--scroll to top-->
<a href="#" rel="nofollow"
   class="btn backTo_Top position-fixed bg-secondary text-white rounded-circle pt-1 shadow-sm pb-2">
    <i class="bi bi-arrow-up"></i>
</a>
<!--cta btn-->
<a href="tel:<?php the_field('call_number_service', 'option') ?>"
   rel="nofollow"
   id="cta-event"
   class="d-lg-none btn call translate-middle-x btn-secondary rounded shadow pt-1 d-flex align-items-center
   animate__animated animate__fadeInUp animate__delay-1s">
    مشاوره
    <p class="logo_header ps-3 mb-1 fs-4">
        <i class="bi bi-telephone-plus"></i>
    </p>

</a>
<main class="position-relative overflow-hidden end-section">