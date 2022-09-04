<div class="row border-top p-3 mt-5 blog-section">
    <div class="col-12 px-0 text-white">
        <h1 class="mb-1">آخرین مقالات</h1>
        <p class="mt-1">پرطرفدارترین پست های پند پلاس در یک نگاه</p>
    </div>
    <div class="col-12 px-0">
        <div
            class="splide  splide-customizable outside-pagination wow animate__animated animate__fadeIn animate__delay-1s"
            data-gap="24" data-perpage="3"
            data-pagination="true" data-arrow="true"
            aria-label="services slider">
            <div class="splide__arrows custom__arrows">
                <button class="splide__arrow splide__arrow--prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                    </svg>
                </button>
                <button class="splide__arrow splide__arrow--next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                    </svg>
                </button>
            </div>
            <div class="splide__track  pt-5 p-md-0">
                <ul class="splide__list">
                    @for($i=1;$i<7;$i++)
                        <li class="splide__slide overflow-hidden rounded-1">
                            <div href="#" class="card border-0 lazy rounded-1 my-0 no-translate">
                                <div class="lazy overflow-hidden rounded-1">
                                    <img class="background-image img-fluid w-100 overflow-hidden rounded-1 lazy" src="{{ asset('images/blog/blog-category.jpg') }}" alt="">
                                </div>
                                <div class="d-inline position-absolute bottom-0 start-0 end-0 vstack justify-content-end p-3 m-lg-3 m-2 background-blur  rounded-1">
                                    <span class="badge background-blur-badge text-start">دیجیتال مارکتینگ</span>
                                    <h6 class="my-2">
                                        <a href="#" class="stretched-link link-white">
                                            دیجیتال مارکتینگ چیست و چه کاربردی دارد
                                        </a>
                                    </h6>

                                    <div class="row justify-content-lg-start justify-content-between align-items-center">
                                        <div class="col-2 ">
                                            <img src="http://127.0.0.1:8000/images/logo-avatar.png" alt="">
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
                        </li>
                    @endfor
                </ul>
            </div>
            {{--                    <div class="splide__arrows"></div>--}}
        </div>
    </div>
</div>
