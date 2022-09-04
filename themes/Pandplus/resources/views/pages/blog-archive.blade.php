@extends('layout.main')

@section('content')
    <section class="container-xl container-fluid z-top position-relative default-margin-top">
        <div class="row justify-content-start align-items-center">
            <div class="col-12 text-white  mb-3">
                <h1 class="mb-1">پست های پرطرفدار</h1>
                <p class="mt-1">پرطرفدارترین پست های پند پلاس در یک نگاه</p>
            </div>
        </div>
        <div class="grid blog-grid container-fluid justify-content-center justify-content-md-between">
            @for($i=1;$i<5;$i++)
                <div class="h-100 row ">
                    <div class="col-12 overflow-hidden row flex-xl-row-reverse flex-row g-0">
                        <div class="col-4 position-relative">
                            <div  class="position-relative">
                                <div class="ratio ratio-1x1 rounded-1 overflow-hidden ">
                                    <img class="img-fluid overflow-hidden rounded-1 object-fit lazy" src="{{ asset('images/blog/blog.jpg') }}"
                                         alt="">
                                </div>
                                <span class="position-absolute top-0 end-0 m-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                     fill="none">
                                <g filter="url(#filter0_b_203_680)">
                                <rect width="32" height="32" rx="10" fill="white" fill-opacity="0.3"/>
                                <path d="M16 23C19.31 23 22 20.31 22 17V12C22 8.69 19.31 6 16 6C12.69 6 10 8.69 10 12V17C10 20.31 12.69 23 16 23Z"
                                      stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7 15V17C7 21.97 11.03 26 16 26C20.97 26 25 21.97 25 17V15" stroke="white" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.1104 11.4797C14.8904 10.8297 16.8304 10.8297 18.6104 11.4797" stroke="white" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.0303 14.4799C15.2303 14.1499 16.5003 14.1499 17.7003 14.4799" stroke="white" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                                <rect x="0.5" y="0.5" width="31" height="31" rx="9.5" stroke="white" stroke-opacity="0.3"/>
                                </g>
                                <defs>
                                <filter id="filter0_b_203_680" x="-10" y="-10" width="52" height="52" filterUnits="userSpaceOnUse"
                                        color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feGaussianBlur in="BackgroundImage" stdDeviation="5"/>
                                <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_203_680"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_203_680" result="shape"/>
                                </filter>
                                </defs>
                                </svg>
                            </span>
                            </div>
                        </div>
                        <div class="col-8 text-white px-xl-5 p-3">
                            <h4>ﻃﺮز ﺗﻬﯿﻪ ﭘﻨﮑﯿﮏ و ﺗﺰﯾﯿﻦ آن ﺑﺎ ﻣﻮز و ﻋﺴﻞ</h4>
                            <p> درآﻣﺪ ﻓﻮق‌اﻟﻌﺎد‌ه‌ای ﺑﺮای ﻧﺘﻔﻠﯿﮑﺲ داﺷﺘﻪ اﺳﺖ.ﺳﺮﯾﺎل diuqS emaG در ﺣﺎل ﺣﺎﺿﺮ ﻣﺤﺒﻮب‌ﺗﺮﯾﻦ و ﭘﺮ
                                ﺑﺤﺚ‌ﺗﺮﯾﻦ ﺳﺮﯾﺎل ﻧﺘﻔﻠﯿﮑﺲ و ﺷﺎﯾﺪ ﺟﻬﺎن ﺑﺎﺷﺪ</p>
                            <div class="d-inline">
                                <span class="p-2 m-2 rounded-pill background-blur">
                                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12.62 20.8096C12.28 20.9296 11.72 20.9296 11.38 20.8096C8.48 19.8196 2 15.6896 2 8.68961C2 5.59961 4.49 3.09961 7.56 3.09961C9.38 3.09961 10.99 3.97961 12 5.33961C13.01 3.97961 14.63 3.09961 16.44 3.09961C19.51 3.09961 22 5.59961 22 8.68961C22 15.6896 15.52 19.8196 12.62 20.8096Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                    521
                                </span>
                                <span class="p-2 m-2 rounded-pill background-blur">
                                    <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M8.5 19H8C4 19 2 18 2 13V8C2 4 4 2 8 2H16C20 2 22 4 22 8V13C22 17 20 19 16 19H15.5C15.19 19 14.89 19.15 14.7 19.4L13.2 21.4C12.54 22.28 11.46 22.28 10.8 21.4L9.3 19.4C9.14 19.18 8.77 19 8.5 19Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.9965 11H16.0054" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11.9955 11H12.0045" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.99451 11H8.00349" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    521</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

    </section>
    <section class="container-xl container-fluid z-top position-relative blog-section">

        <div class="row p-4 mt-5">
           <div class="background-blur rounded-3 ">
               <div class="col-12 p-3 text-white">
                   <h1 class="mb-1">دسته مقالات</h1>
                   <p class="mt-1">پرطرفدارترین پست های پند پلاس در یک نگاه</p>
               </div>
               <div class="col-12 p-3">
                   <div
                       class="splide  splide-customizable outside-pagination wow animate__animated animate__fadeIn animate__delay-1s"
                       data-gap="24" data-perpage="5"
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
                       <div class="splide__track pt-5 p-md-0">
                           <ul class="splide__list">
                               @for($i=1;$i<7;$i++)
                                   <li class="splide__slide overflow-hidden rounded-1">
                                       <a href="#" class="card border-0 lazy rounded-1 my-0 no-translate">
                                           <div class="lazy overflow-hidden rounded-1">
                                               <img class="img-fluid w-100 overflow-hidden rounded-1 lazy background-image" src="{{ asset('images/blog/blog-category.jpg') }}" alt="">
                                           </div>
                                           <div class="background-blur p-3 rounded-1 bottom-0 position-absolute z-top">
                                               <h6 class="my-2">
                                    <span class="link-white">
                                        دیجیتال مارکتینگ چیست و چه کاربردی دارد
                                    </span>
                                               </h6>
                                           </div>
                                       </a>
                                   </li>
                               @endfor
                           </ul>
                       </div>
                       {{--                    <div class="splide__arrows"></div>--}}
                   </div>
               </div>
           </div>
        </div>
    </section>




@endsection
