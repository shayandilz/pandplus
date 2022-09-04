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
                    data-gap="10" data-perpage="5"
                    data-pagination="false" data-arrow="true"
                    aria-label="services slider">
                    <div class="splide__arrows custom__arrows">
                        <button class="splide__arrow splide__arrow--prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                                 class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                            </svg>
                        </button>
                        <button class="splide__arrow splide__arrow--next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                                 class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="splide__track pt-5 p-md-0">
                        <ul class="splide__list">
                            <?php
                            $categories = get_categories();
                            foreach($categories as $category) {
                                $category_link = get_category_link($category->cat_ID);
                                ?>
                                <li class="splide__slide overflow-hidden rounded-1">
                                    <a href="<?php echo esc_url( $category_link ) ?>" class="card border-0 lazy rounded-1 my-0 no-translate">
                                        <div class="lazy overflow-hidden rounded-1">
                                            <?php $image = get_field('category_image', $category->taxonomy . '_' . $category->term_id); ?>
                                            <img class="img-fluid w-100 overflow-hidden rounded-1 lazy background-image"
                                                 src="<?php
                                                 if($image) {
                                                     echo esc_url($image['url']);
                                                 }
                                                 else{
                                                     echo 'https://pandplus.com/wp-content/uploads/2022/06/بازاریابی-محتوایی.jpg';
                                                 }
                                                 ?>" alt="">
                                        </div>
                                        <div class="background-blur p-3 rounded-1 card-img-overlay z-top" style="top: unset!important;">
                                            <h6 class="my-2">
                                                <span class="link-dark lazy">
                                                   <?php echo $category->name; ?>
                                                </span>
                                            </h6>
                                        </div>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!--                        {{--                    <div class="splide__arrows"></div>--}}-->
                </div>
            </div>
        </div>
    </div>
</section>