<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZTJDKQXKFQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-ZTJDKQXKFQ');
    </script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JCSSNW"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<?php //wp_body_open(); ?>
<!-- Navbar STart -->
<header id="main-header" class="position-fixed lazy">
    <div class="flex-nowrap">
        <nav class="navbar navbar-expand-xl rounded navbar-dark lazy-slow justify-content-xl-between justify-content-xl-start justify-content-between flex-xl-row flex-row-reverse">

            <a class="navbar-brand" href="<?= esc_url(site_url()); ?>">
                <?= get_field('site_logo', 'option'); ?>
            </a>

            <!--        responsive menu toggler        -->
            <button class="navbar-toggler me-4 border-0 px-0">
                <svg width="54" height="54" viewBox="0 0 120 120">
                    <g>
                        <path class="line top"
                              d="M35,35h50c14.1,0,50.6,13,20.5,53.5s-121.9,21.6-94.4-40.3S111.6,8.4,85,35L35,85"/>
                        <path class="line bottom"
                              d="M35,85h50c14.1,0,50.6-13,20.5-53.5S-16.4,9.9,11.1,71.8S111.6,111.6,85,85L35,35"/>
                        <line class="line cross" x1="35" y1="60" x2="85" y2="60"/>
                    </g>
                </svg>
            </button>
            <div class="d-xl-flex d-none background-blur align-items-center order-3 ms-auto rounded-3">
                <div id="navbarNav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'headerMenuLocation',
                        'menu_class' => 'navbar-nav align-items-center gap-3',
                        'container' => false,
                        'item_class' => 'nav-item d-flex align-items-center px-3',
                        'link_class' => 'nav-link ps-1 pe-0 d-flex flex-row-reverse gap-2',
                        'depth' => 1
                    ));
                    ?>
                </div>
                <button type="button"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal"
                        id="button-cta"
                        class="background-radial rounded-1 text-white btn btn-gold fw-bold fs-5 px-md-5 py-1 d-md-block ms-3">
                    مشاوره
                </button>
            </div>
        </nav>
    </div>

    <section class="menu__body background-blur d-block h-100 pb-2 position-fixed bottom-0">
        <nav class="menu__header navbar flex-column align-items-end">
            <a class="navbar-brand border-bottom w-100 py-3 text-end pe-3" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="103" height="31" viewBox="0 0 103 31" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M96.2816 16C96.073 15.9864 95.8663 15.9484 95.665 15.8866C95.3944 15.8077 95.2213 15.4872 95.1104 14.9251C94.8946 13.2379 94.7864 11.5359 94.7866 9.83174V9.04777C93.6509 9.04777 92.5257 9.08064 91.4107 9.14638H91.2909C90.9894 9.17703 90.6887 9.07964 90.4492 8.87382C90.2097 8.66799 90.0492 8.369 90 8.03698V7.83976C90.008 7.53111 90.0958 7.23155 90.2529 6.97689C90.3335 6.83536 90.4429 6.71695 90.5724 6.63128C90.7019 6.5456 90.8478 6.49509 90.9981 6.48383C92.329 6.41973 93.6199 6.39014 94.933 6.39014C95.0915 4.53834 95.3882 2.70439 95.8202 0.907251C95.8545 0.732441 95.9277 0.569983 96.0331 0.434746C96.1385 0.299509 96.2728 0.195808 96.4235 0.133133C96.5976 0.044976 96.7867 -0.000433567 96.978 3.11993e-06C97.1071 0.0034479 97.2353 0.0249866 97.3595 0.0641041C97.5961 0.162 97.798 0.341909 97.9354 0.577221C98.0728 0.812533 98.1384 1.09075 98.1226 1.37073C98.122 1.51444 98.1026 1.65728 98.0649 1.79476C97.7165 3.3054 97.4718 4.84326 97.3329 6.39507C98.8767 6.45917 100.416 6.58244 101.942 6.75501C102.241 6.77781 102.52 6.93107 102.718 7.18137C102.915 7.43167 103.016 7.75872 102.998 8.09122C102.995 8.3682 102.924 8.63906 102.794 8.87519C102.703 9.0594 102.565 9.21013 102.398 9.30905C102.231 9.40797 102.042 9.45081 101.853 9.43236H101.707C100.199 9.25486 98.6919 9.13488 97.1865 9.07242V9.7923C97.1863 11.3539 97.2931 12.9132 97.5059 14.4567V14.6194C97.5219 14.8309 97.4896 15.0434 97.412 15.2373C97.3345 15.4312 97.2142 15.6003 97.0623 15.7288C96.8303 15.8993 96.5596 15.9934 96.2816 16Z"
                          fill="#00D3BE"/>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12.6897 26.9774C16.3317 26.9774 19.2935 24.4531 19.2935 21.3366V16.979C19.2935 13.8671 16.3317 11.3381 12.6897 11.3381H7.59917C3.95713 11.3381 1 13.8671 1 16.979V30H6.69675V16.979C6.70717 16.8664 6.73944 16.7571 6.7917 16.6573C6.84397 16.5574 6.91519 16.4692 7.00126 16.3975C7.08732 16.3258 7.18652 16.2721 7.29312 16.2396C7.39971 16.2071 7.5116 16.1964 7.6223 16.2081H12.7128C12.9329 16.1898 13.1512 16.2605 13.3202 16.4049C13.4892 16.5493 13.5952 16.7556 13.6152 16.979V21.3413C13.5941 21.5641 13.4877 21.7697 13.319 21.9139C13.1503 22.058 12.9326 22.1292 12.7128 22.1122H7.6223V26.9774H12.6897ZM30.5528 16.979C30.5728 16.7556 30.6788 16.5493 30.8478 16.4049C31.0168 16.2605 31.2351 16.1898 31.4552 16.2081H36.592C36.8121 16.1898 37.0304 16.2605 37.1994 16.4049C37.3684 16.5493 37.4744 16.7556 37.4944 16.979V30H43.1958V16.979C43.1958 13.8671 40.2387 11.3381 36.592 11.3381H31.4552C27.8132 11.3381 24.8514 13.8671 24.8514 16.979V30H30.5528V26.9445H36.592V22.0746H30.5528V16.979ZM62.3963 11.3381V22.8314L62.7064 26.3428H62.4287L61.9289 23.3109C61.3366 20.8383 60.7812 17.9661 60.1842 15.4936C59.9261 14.2103 59.2315 13.0603 58.2221 12.2453C55.2973 9.94199 48.7861 10.7035 48.7861 15.6252V30H54.4875V17.9896L54.145 14.906L54.4551 14.8777L54.9549 17.8815C55.5472 20.3823 56.1072 23.231 56.6996 25.727C57.042 27.2736 57.6575 28.3547 58.6293 28.9752C61.3273 30.6957 68.0931 30.5171 68.0931 25.5954V11.3381H62.3963ZM85.3962 30C89.0382 30 92 27.471 92 24.3591V16.979C92 13.8671 89.0382 11.3381 85.3962 11.3381H73.6834V30H85.3962ZM79.3801 16.2222H85.3962C85.6163 16.2039 85.8346 16.2746 86.0036 16.419C86.1726 16.5634 86.2786 16.7697 86.2986 16.9931V24.3591C86.2786 24.5825 86.1726 24.7888 86.0036 24.9332C85.8346 25.0776 85.6163 25.1483 85.3962 25.1301H79.3801V16.2222Z"
                          fill="white" stroke="white" stroke-width="0.22" stroke-miterlimit="2.61"/>
                </svg>
            </a>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation',
                'menu_class' => 'navbar-nav w-100 text-end pe-3',
                'container' => false,
                'item_class' => 'nav-item',
                'link_class' => 'nav-link fs-2',
                'depth' => 1
            ));
            ?>
            <button type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    class="text-white nav-link fs-2 bg-transparent border-0 text-end pe-3">
                مشاوره
            </button>
        </nav>

    </section>
</header>


<!-- Navbar End -->
