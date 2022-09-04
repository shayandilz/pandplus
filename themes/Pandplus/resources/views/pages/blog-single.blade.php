@extends('layout.main')

@section('content')

    <section class="container z-top position-relative default-margin-top blog-sticky">
        <div class="row justify-content-start align-items-start flex-lg-row flex-column-reverse">
            <div class="col-lg-8 col-12 text-white ps-lg-0">
                <div class="d-inline">
                    @for($i=1;$i<3;$i++)
                        <span class="badge background-blur rounded-3 p-2">متاورس</span>
                    @endfor
                </div>
                <h1 class="py-2 border-bottom">متاورس چیست و چه تاثیری بر دنیای پیرامون ما خواهد گذاشت</h1>
                <div class="row justify-content-lg-between justify-content-center align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="d-flex justify-content-lg-start justify-content-center align-items-center">
                            <div class="lazy me-2">
                                <img src="http://127.0.0.1:8000/images/logo-avatar.png" alt="">
                            </div>
                            <div class="row justify-content-start text-white">
                                <div class="col-12 ">
                                    <span>پند پلاس</span>
                                </div>
                                <div class="col-12 text-white-50">
                                    28 مرداد ، 1401
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 text-lg-end text-center mt-3 mt-lg-0">
                        <div class="d-inline">
                                <span class="p-2 m-2 rounded-pill background-blur">
                                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M12.62 20.8096C12.28 20.9296 11.72 20.9296 11.38 20.8096C8.48 19.8196 2 15.6896 2 8.68961C2 5.59961 4.49 3.09961 7.56 3.09961C9.38 3.09961 10.99 3.97961 12 5.33961C13.01 3.97961 14.63 3.09961 16.44 3.09961C19.51 3.09961 22 5.59961 22 8.68961C22 15.6896 15.52 19.8196 12.62 20.8096Z"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                    521
                                </span>
                            <span class="p-2 m-2 rounded-pill background-blur">
                                    <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M8.5 19H8C4 19 2 18 2 13V8C2 4 4 2 8 2H16C20 2 22 4 22 8V13C22 17 20 19 16 19H15.5C15.19 19 14.89 19.15 14.7 19.4L13.2 21.4C12.54 22.28 11.46 22.28 10.8 21.4L9.3 19.4C9.14 19.18 8.77 19 8.5 19Z"
                                            stroke="white" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M15.9965 11H16.0054" stroke="white" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.9955 11H12.0045" stroke="white" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M7.99451 11H8.00349" stroke="white" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    521
                            </span>
                            <span class="p-2 m-2 rounded-pill background-blur">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none">
                                        <path
                                            d="M15.5799 11.9999C15.5799 13.9799 13.9799 15.5799 11.9999 15.5799C10.0199 15.5799 8.41992 13.9799 8.41992 11.9999C8.41992 10.0199 10.0199 8.41992 11.9999 8.41992C13.9799 8.41992 15.5799 10.0199 15.5799 11.9999Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M11.9998 20.2697C15.5298 20.2697 18.8198 18.1897 21.1098 14.5897C22.0098 13.1797 22.0098 10.8097 21.1098 9.39973C18.8198 5.79973 15.5298 3.71973 11.9998 3.71973C8.46984 3.71973 5.17984 5.79973 2.88984 9.39973C1.98984 10.8097 1.98984 13.1797 2.88984 14.5897C5.17984 18.1897 8.46984 20.2697 11.9998 20.2697Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        </svg>
                                    23
                            </span>
                        </div>
                    </div>

                </div>
                <div class="text-white py-4">
                    /* لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                    نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                    حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان
                    رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید
                    داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل
                    حروفچینی
                    <br>
                    رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید
                    داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل
                    حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                    گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                    نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                    حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان
                    رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید
                    داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل
                    حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                    گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
                </div>
                <div class="background-blur w-100 d-flex align-items-center rounded-1">
                    <span class="badge rounded-1 bg-white me-2 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.4" d="M4.17038 15.2998L8.70038 19.8298C10.5604 21.6898 13.5804 21.6898 15.4504 19.8298L19.8404 15.4398C21.7004 13.5798 21.7004 10.5598 19.8404 8.6898L15.3004 4.1698C14.3504 3.2198 13.0404 2.7098 11.7004 2.7798L6.70038 3.0198C4.70038 3.1098 3.11038 4.6998 3.01038 6.6898L2.77038 11.6898C2.71038 13.0398 3.22038 14.3498 4.17038 15.2998Z" fill="#4C5098"/>
                            <path d="M9.50012 12.3801C11.0907 12.3801 12.3801 11.0907 12.3801 9.50012C12.3801 7.90954 11.0907 6.62012 9.50012 6.62012C7.90954 6.62012 6.62012 7.90954 6.62012 9.50012C6.62012 11.0907 7.90954 12.3801 9.50012 12.3801Z" fill="#4C5098"/>
                        </svg>
                    </span>
                    <div>
                        <span class="badge background-blur rounded-1 p-2">متاورس</span>
                    </div>
                </div>
                @include('partials.related')
                @include('partials.comment')
            </div>
            <div class="col-lg-4 col-12 sticky-section">
                <div class="ratio ratio-1x1 rounded-1 overflow-hidden mb-3">
                    <img class="img-fluid overflow-hidden rounded-1 object-fit lazy"
                         src="{{ asset('images/blog/blog.jpg') }}"
                         alt="">
                </div>
                @include('partials.sidebar')
            </div>
        </div>
    </section>

@endsection
