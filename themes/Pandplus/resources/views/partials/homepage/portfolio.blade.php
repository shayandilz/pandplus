<section class="container py-5 z-top position-relative">
    <div class="text-center mb-4">
        <p class="h2 fs-2 wow animate__animated animate__fadeInUp text-white">نمونه کارها</p>
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
                        @include('partials.portfolio-card')
                    </li>
                @endfor
            </ul>
        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-2 position-relative">
            <div class="frame position-absolute bottom-0 start-0 end-0 top-0">
                <div class="b1 position-absolute top-50 end-50 rounded-circle bg-transparent"></div>
                <div class="b2 position-absolute top-50 end-50 rounded-circle bg-transparent"></div>
                <div class="b3 position-absolute top-50 end-50 rounded-circle bg-transparent"></div>
                <div class="b4 position-absolute top-50 end-50 rounded-circle bg-transparent"></div>
                <div class="b5 position-absolute top-50 end-50 rounded-circle bg-transparent"></div>
            </div>
            <a class="background-radial text-white btn btn-gold px-md-3 px-2 d-md-block d-none " href="#">
                    <span class="d-md-inline d-none">
                        همه نمونه کارها
                    <i class="bi bi-arrow-left ms-1"></i>
                    </span>
            </a>
        </div>
    </div>
</section>
