<section class=" py-5 z-top position-relative custom-background">
<div class="container-lg container-fluid">
    <div class="text-center mb-4">
        <?php
        $blog_title = get_field('home_blog-title');
        $blog_desc = get_field('home_blog-desc');
        if ($blog_title): ?>
            <p class="h2 fs-2 wow animate__animated animate__fadeInUp text-white">
                <?= $blog_title ?>
            </p>
        <?php endif;
        if ($blog_desc): ?>
            <div class="wow animate__animated animate__fadeInUp animate__delay-1s text-white">
                <?= $blog_desc ?>
            </div>
        <?php endif; ?>
    </div>

    <div
            class="splide splide-customizable outside-pagination wow animate__animated animate__fadeIn animate__delay-1s"
            data-gap="10" data-perpage="4"
            data-pagination="true" data-arrow="false"
            aria-label="services slider">
        <div class="splide__track">
            <div class="splide__list pb-5 wow animate__animated animate__fadeIn animate__delay-1s">
                <?php
                $posts = get_posts(array('numberposts' => 4)); //Get all published posts
                foreach ($posts as $post) {?>
                    <article class="splide__slide  overflow-hidden rounded-1">
                        <?php get_template_part('template-parts/post-card'); ?>
                    </article>
                <?php } ?>
            </div>
        </div>
    </div>


    <div class="row justify-content-center mt-3">
        <div class="col-6 position-relative  text-center">
            <?php get_template_part('template-parts/button-animate'); ?>
            <a class="background-radial text-white btn btn-gold px-md-3 px-2 rounded-1"
               href="<?php echo get_post_type_archive_link('post'); ?>">
                        <span class="d-inline">
                            همه مقاله ها
                        <i class="bi bi-arrow-left ms-1"></i>
                        </span>
            </a>
        </div>
    </div>
</div>
</section>
