<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- End Google Tag Manager (noscript) -->
<?php //wp_body_open(); ?>

<!-- Navbar STart -->
<header>
    <a href="#cd-nav" class="cd-nav-trigger position-fixed z-top ">Menu
        <span class="cd-nav-icon"></span>

        <svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
            <circle fill="transparent" stroke="#656e79" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
        </svg>
    </a>

    <div id="cd-nav" class="cd-nav bg-dark">
        <div class="cd-navigation-wrapper">
            <div class="cd-half-block">
                <h2>Navigation</h2>

                <nav>
                    <ul class="cd-primary-nav">
                        <li><a href="#0" class="selected">The team</a></li>
                        <li><a href="#0">Our services</a></li>
                        <li><a href="#0">Our projects</a></li>
                        <li><a href="#0">Start a project</a></li>
                        <li><a href="#0">Contact us</a></li>
                    </ul>
                </nav>
            </div><!-- .cd-half-block -->

            <div class="cd-half-block">
                <address>
                    <ul class="cd-contact-info">
                        <li><a href="mailto:info@myemail.co">info@myemail.co</a></li>
                        <li>0244-12345678</li>
                        <li>
                            <span>MyStreetName 24</span>
                            <span>W1234X</span>
                            <span>London, UK</span>
                        </li>
                    </ul>
                </address>
            </div> <!-- .cd-half-block -->
        </div> <!-- .cd-navigation-wrapper -->
    </div> <!-- .cd-nav -->
</header>

<main class="">