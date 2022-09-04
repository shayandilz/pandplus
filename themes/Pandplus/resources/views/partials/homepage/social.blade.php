<section class="container py-5 z-top position-relative ">
    <div
        class="splide splide-customizable outside-pagination wow animate__animated animate__fadeIn animate__delay-1s"
        data-gap="24" data-perpage="3"
        data-pagination="true" data-arrow="false"
        aria-label="services slider">
        <div class="splide__track">
            <ul class="splide__list social-cards">
                @for($i=1;$i<4;$i++)
                    <li class="splide__slide">
                        <div class="card background-blur-insta hover-shadow border-0 lazy rounded-1 p-lg-3 p-2 my-3">
                            <div class="row justify-content-lg-start justify-content-between align-items-center">
                                <div class="col-2 lazy ">
                                    <img src="{{ asset('images/logo-avatar.png') }}" alt="">
                                </div>
                                <div class="col-10 row justify-content-start text-white">
                                    <div class="col-12">
                                        <span>پند پلاس</span>
                                    </div>
                                    <div class="col-12 text-white">
                                        28 مرداد ، 1401
                                    </div>
                                </div>
                            </div>
                            <div class="ratio lazy ratio-1x1 overflow-hidden rounded-3">
                                <img class="object-fit" src="{{ asset('images/social-badge.jpg') }}" alt="">
                            </div>
                            <ul class="d-flex flex-row rounded-1 text-white mt-2 mb-0">
                                <li class="d-flex flex-row align-items-center me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                                         fill="none">
                                        <path
                                            d="M14.44 0.100098C12.63 0.100098 11.01 0.980098 10 2.3301C8.99 0.980098 7.37 0.100098 5.56 0.100098C2.49 0.100098 0 2.6001 0 5.6901C0 6.8801 0.19 7.9801 0.52 9.0001C2.1 14.0001 6.97 16.9901 9.38 17.8101C9.72 17.9301 10.28 17.9301 10.62 17.8101C13.03 16.9901 17.9 14.0001 19.48 9.0001C19.81 7.9801 20 6.8801 20 5.6901C20 2.6001 17.51 0.100098 14.44 0.100098Z"
                                            fill="#DD3452"/>
                                    </svg>
                                    <span class="ms-2">128</span>
                                </li>
                                <li class="d-flex flex-row align-items-center me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
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
                                    <span class="ms-2">128</span>
                                </li>
                                <li class="d-flex flex-row align-items-center me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none">
                                        <path d="M16.96 6.16992C18.96 7.55992 20.34 9.76992 20.62 12.3199" stroke="#292D32"
                                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M3.49023 12.3702C3.75023 9.83021 5.11023 7.62021 7.09023 6.22021"
                                              stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path
                                            d="M8.18994 20.9399C9.34994 21.5299 10.6699 21.8599 12.0599 21.8599C13.3999 21.8599 14.6599 21.5599 15.7899 21.0099"
                                            stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M12.0598 7.70014C13.5951 7.70014 14.8398 6.45549 14.8398 4.92014C14.8398 3.38479 13.5951 2.14014 12.0598 2.14014C10.5244 2.14014 9.27979 3.38479 9.27979 4.92014C9.27979 6.45549 10.5244 7.70014 12.0598 7.70014Z"
                                            stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M4.8298 19.9199C6.36516 19.9199 7.60981 18.6752 7.60981 17.1399C7.60981 15.6045 6.36516 14.3599 4.8298 14.3599C3.29445 14.3599 2.0498 15.6045 2.0498 17.1399C2.0498 18.6752 3.29445 19.9199 4.8298 19.9199Z"
                                            stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M19.1701 19.9199C20.7055 19.9199 21.9501 18.6752 21.9501 17.1399C21.9501 15.6045 20.7055 14.3599 19.1701 14.3599C17.6348 14.3599 16.3901 15.6045 16.3901 17.1399C16.3901 18.6752 17.6348 19.9199 19.1701 19.9199Z"
                                            stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                    <span class="ms-2">128</span>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endfor
            </ul>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-2 position-relative">
            <div class="frame position-absolute  bottom-0 start-0 end-0 top-0">
                <div class="b1 position-absolute top-50 end-50 rounded-circle bg-transparent"></div>
                <div class="b2 position-absolute top-50 end-50 rounded-circle bg-transparent"></div>
                <div class="b3 position-absolute top-50 end-50 rounded-circle bg-transparent"></div>
                <div class="b4 position-absolute top-50 end-50 rounded-circle bg-transparent"></div>
                <div class="b5 position-absolute top-50 end-50 rounded-circle bg-transparent"></div>
            </div>
            <a class="background-radial text-white btn btn-gold px-md-3 px-2 d-md-block d-none " href="#">
                    <span class="d-md-inline d-none">
                        فالو یادتون نره!
                    <i class="bi bi-arrow-left ms-1"></i>
                    </span>
            </a>
        </div>
    </div>
</section>
