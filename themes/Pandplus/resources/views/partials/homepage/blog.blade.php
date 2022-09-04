<section class="container py-5 z-top position-relative">
    <div class="text-center mb-4">
        <p class="h2 fs-2 wow animate__animated animate__fadeInUp text-white">آخرین مقالات</p>
        <p class="wow animate__animated animate__fadeInUp animate__delay-1s text-white">ﺑﺎ اراﺋﻪ ﺧﺪﻣﺎت ﻗﺎﻧﻮﻧﯽ، ﺣﻘﻮﻗﯽ
            و راﻫﻨﻤﺎﯾﯽ
            ﻫﺎی ﺷﺨﺼﯽ در ﻃﻮل ﻓﺮآﯾﻨﺪ ﻣﻬﺎﺟﺮت، ﺷﻤﺎ را ﺑﻪ ﺳﻮی زﻧﺪﮔﯽ ﺟﺪﯾﺪ ﻫﺪاﯾﺖ
            ﺧﻮاﻫﯿﻢ ﮐﺮد.</p>
    </div>

    <div
        class="splide splide-customizable outside-pagination wow animate__animated animate__fadeIn animate__delay-1s"
        data-gap="24" data-perpage="4"
        data-pagination="true" data-arrow="false"
        aria-label="services slider">
        <div class="splide__track">
            <ul class="splide__list">
                @for($i=1;$i<5;$i++)
                    <li class="splide__slide">
                        <div class="card hover-shadow border-0 lazy my-3">
                            <div class="ratio lazy ratio-1x1 overflow-hidden rounded-1" style="padding: 2.5rem 0rem">
                                <img class="object-fit" src="{{ asset('images/blog-image.jpg') }}" alt="">
                            </div>

                            <div class="card-img-overlay overflow-hidden bg-gradient rounded-1 p-2">
                                <div class="position-absolute bottom-0 start-0 end-0 vstack justify-content-end p-3 m-lg-3 m-2 background-blur d-inline rounded-1">
                                    <span class="badge background-blur-badge text-start">دیجیتال مارکتینگ</span>
                                    <h6 class="my-2">
                                        <a href="#" class="stretched-link link-white">
                                            دیجیتال مارکتینگ چیست و چه کاربردی دارد
                                        </a>
                                    </h6>

                                    <div class="row justify-content-lg-start justify-content-between align-items-center">
                                        <div class="col-2 lazy ">
                                            <img src="{{ asset('images/logo-avatar.png') }}" alt="">
                                        </div>
                                        <div class="col-10 row justify-content-start text-white">
                                            <div class="col-12">
                                                <span>پند پلاس</span>
                                            </div>
                                            <div class="col-12 text-muted">
                                                28 مرداد ، 1401
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endfor
            </ul>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-2 position-relative">

           @include('partials.button-animate')
            <a class="background-radial text-white btn btn-gold px-md-3 px-2 d-md-block d-none " href="#">
                    <span class="d-md-inline d-none">
                        همه مقاله ها
                    <i class="bi bi-arrow-left ms-1"></i>
                    </span>
            </a>
        </div>
    </div>
</section>
