<?php
global $post;
$orig_post = $post;
$tags = get_the_category($post->ID);

if ($tags) {
    $tags_ids = array();
    foreach ($tags as $individual_tag) $tags_ids[] = $individual_tag->term_id;

    $args1 = array(
        'category__in' => $tags_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page' => 3, // Number of related posts to display.
        'caller_get_posts' => 1
    );
    $my_query = new wp_query($args1);

}
?>
    <div class="row border-top p-3 mt-5 blog-section">
        <div class="col-12 px-0 text-white pb-0 pb-md-5 pb-lg-0">
            <h5 class="mb-1 fs-1">مقالات مرتبط</h5>
            <p class="mt-1">پرطرفدارترین پست های پند پلاس در یک نگاه</p>
        </div>
        <div class="col-12 px-0">
            <div
                    class="splide  splide-customizable outside-pagination wow animate__animated animate__fadeIn animate__delay-1s"
                    data-gap="10" data-perpage="3"
                    data-pagination="true" data-arrow="true"
                    aria-label="services slider">
                <div class="splide__arrows custom__arrows">
                    <button class="splide__arrow splide__arrow--prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                             class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                        </svg>
                    </button>
                    <button class="splide__arrow splide__arrow--next end-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                             class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                        </svg>
                    </button>
                </div>
                <div class="splide__track">
                    <div class="splide__list pb-5 wow animate__animated animate__fadeIn animate__delay-1s">
                        <?php while ($my_query->have_posts()) {
                            $my_query->the_post(); ?>
                            <article class="splide__slide  overflow-hidden rounded-1">
                                <?php get_template_part('template-parts/post-card'); ?>
                            </article>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div >
<?php
$post = $orig_post;
wp_reset_query();

?>