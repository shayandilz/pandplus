<section class="container py-5 z-top position-relative ">
    <?php
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.apify.com/v2/datasets/p1FmxUBWbgny732Kh/items?token=apify_api_fwsTmeAydqB8R8h0B3kkQj8GMW95hJ0zIWCp',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));

    $responses = curl_exec($curl);
    curl_close($curl);
    $responses = json_decode($responses, true);

    ?>
    <div
            class="splide splide-customizable outside-pagination wow animate__animated animate__fadeIn animate__delay-1s"
            data-gap="24" data-perpage="3"
            data-pagination="true" data-arrow="false"
            aria-label="services slider">
        <div class="splide__track">
            <ul class="splide__list social-cards">
                <?php $i = 0;
                foreach ($responses as $response) {
                    if ($i >= 3) {
                        break;
                    } else {
                        ?>
                        <li class="splide__slide">
                            <div class="card background-blur-insta hover-shadow border-0 lazy rounded-1 p-lg-3 p-2 my-3">
                                <div class="row justify-content-lg-start justify-content-between align-items-center">
                                    <div class="col-2 lazy ">
                                        <img src="{{ asset('images/logo-avatar.png') }}" alt="">
                                    </div>
                                    <div class="col-10 row justify-content-start text-white">
                                        <div class="col-12">
                                            <span><?php echo $response['ownerUsername']; ?></span>
                                        </div>
                                        <div class="col-12 text-white">
                                            28 مرداد ، 1401
                                        </div>
                                    </div>
                                </div>
                                <div class="ratio lazy ratio-1x1 overflow-hidden rounded-3">

                                    <img class="object-fit" src="<?php echo $response['displayUrl']; ?>" alt="">
                                </div>
                                <ul class="d-flex flex-row rounded-1 text-white mt-2 mb-0">
                                    <li class="d-flex flex-row align-items-center me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                                             viewBox="0 0 20 18"
                                             fill="none">
                                            <path
                                                    d="M14.44 0.100098C12.63 0.100098 11.01 0.980098 10 2.3301C8.99 0.980098 7.37 0.100098 5.56 0.100098C2.49 0.100098 0 2.6001 0 5.6901C0 6.8801 0.19 7.9801 0.52 9.0001C2.1 14.0001 6.97 16.9901 9.38 17.8101C9.72 17.9301 10.28 17.9301 10.62 17.8101C13.03 16.9901 17.9 14.0001 19.48 9.0001C19.81 7.9801 20 6.8801 20 5.6901C20 2.6001 17.51 0.100098 14.44 0.100098Z"
                                                    fill="#DD3452"/>
                                        </svg>
                                        <span class="ms-2"><?php echo $response['likesCount']; ?></span>
                                    </li>
                                    <li class="d-flex flex-row align-items-center me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none">
                                            <path
                                                    d="M8.5 19H8C4 19 2 18 2 13V8C2 4 4 2 8 2H16C20 2 22 4 22 8V13C22 17 20 19 16 19H15.5C15.19 19 14.89 19.15 14.7 19.4L13.2 21.4C12.54 22.28 11.46 22.28 10.8 21.4L9.3 19.4C9.14 19.18 8.77 19 8.5 19Z"
                                                    stroke="#42424A" stroke-width="1.5" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.9965 11H16.0054" stroke="#42424A" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.9955 11H12.0045" stroke="#42424A" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.99451 11H8.00349" stroke="#42424A" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="ms-2"><?php echo $response['commentsCount']; ?></span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <?php $i++;
                    }
                } ?>
            </ul>
        </div>
    </div>
    <!--    <div class="row justify-content-center">-->
    <!--        <div class="col-2 position-relative">-->
    <!--            --><?php //get_template_part('template-parts/button-animate'); ?>
    <!--            <a class="background-radial text-white btn btn-gold px-md-3 px-2 d-md-block d-none " href="#">-->
    <!--                    <span class="d-md-inline d-none">-->
    <!--                        فالو یادتون نره!-->
    <!--                    <i class="bi bi-arrow-left ms-1"></i>-->
    <!--                    </span>-->
    <!--            </a>-->
    <!--        </div>-->
    <!--    </div>-->
</section>
