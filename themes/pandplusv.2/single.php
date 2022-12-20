<?php get_header();

while (have_posts()) :
    the_post();
    ?>

    <section class="position-relative overflow-hidden pb-5">
    <span class="position-absolute top-50 start-0 d-none d-lg-inline">
        <?php get_template_part('template-parts/lines/ver-hor-line-big-right'); ?>
    </span>
        <div class="container mt-lg-5 py-5 ">
            <div class="row justify-content-center vh-65">
                <div class="col-12 col-lg-7 order-2 order-lg-1">
                    <!-- tag list        -->
                    <div class="d-flex gap-3">
                        <h6 class=" px-3 py-2 ">
                            <span class="text-danger my-auto">
                                <?php get_template_part('template-parts/icons/tag-icon'); ?>
                                <?php
                                $category_detail = get_the_category($post->ID);//$post->ID
                                foreach ($category_detail as $category) { ?>
                                    <span
                                            class="bg-success shadow-sm rounded text-decoration-none py-2 px-3 ms-2 small fw-lighter">
                                        <?php echo $category->name ?>
                                    </span>
                                <?php } ?>
                            </span>
                            <!-- tag name-->
                        </h6>
                    </div>
                    <!--            title-->
                    <h1 class="my-4 px-3 px-lg-0">
                        <?php the_title(); ?>
                    </h1>
                    <!--            table of content-->
                    <div class="bg-success image-rounded px-4 px-lg-5 py-4 mb-5 shadow-sm">
                        <h3 class="py-3">آنچه در این مقاله می‌خوانید:</h3>
                        <div class="d-flex align-items-center">
                            <?php echo do_shortcode('[TOC]') ?>
                        </div>
                    </div>
                    <!--            excerpt-->
                    <!--            <p class="py-3 text-justify">--><?php //echo get_the_excerpt();
                    ?><!--</p>-->
                    <!--            author info-->
                    <div class="d-flex gap-3 align-items-center">
                        <?php $user_array_img = get_field('profile_image', 'user_' . $post->post_author);
                        if ($user_array_img) { ?>
                            <img class="rounded-circle" width="42px" height="42px"
                                 src="<?php echo $user_array_img['url'] ?>"
                                 alt="<?php echo $user_array_img['alt'] ?>">
                        <?php } else { ?>
                            <img class="rounded-circle" width="42px" height="42px"
                                 src="<?php echo esc_url(site_url('/wp-content/uploads/2022/06/logo-avatar.png')); ?>"
                                 alt="<?php the_title(); ?>">
                        <?php } ?>
                        <div>
                            <div>
                                <!--                        author name-->
                                ارسال توسط
                                <span class="fw-normal text-primary">
                        <?php echo get_the_author_meta('display_name', $post->post_author); ?>
                        </span>
                            </div>
                            <div class="d-flex align-items-center">
                                <!--                        date-->
                                <?php echo get_the_date('d  F , Y'); ?>
                                <!--                        reading time-->
                                <hr class="vr mx-1">
                                <div class="d-flex px-2 align-items-center">
                                    <?php get_template_part('template-parts/icons/clock'); ?>
                                    زمان مطالعه
                                    <h6 class="fw-bold mx-2 my-0">
                                        <?= reading_time(); ?>
                                    </h6>
                                    دقیقه
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 order-1 order-lg-2 mb-3 mb-lg-0 pt-5 pt-lg-0">
                    <!--        post image-->
                    <div class="ratio ratio-1x1">
                        <img class="image-rounded-blog object-fit shadow-sm"
                             src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?= the_title(); ?>">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <!--        main area-->
                <div class="col-12 col-lg-7 bg-white z-top">


                    <!--            content-->
                    <article class="text-justify px-1 px-lg-0 text-danger">
                        <?php the_content(); ?>
                    </article>
                    <!--                            every 200 word-->
                    <!--                    <div class="bg-success image-rounded p-3 my-5">-->
                    <!--                        <div class="d-md-flex gap-3 align-items-center text-center text-md-start">-->
                    <!--                            <img class="col-12 col-lg-2 image-rounded-min object-fit"-->
                    <!--                                 src="--><?php //echo get_the_post_thumbnail_url();
                    ?><!--" alt="">-->
                    <!--                            <div class="col-12 col-lg-7 mt-2 mt-md-0">-->
                    <!--                                <div class="d-flex align-items-center gap-3 justify-content-center justify-content-md-start">-->
                    <!--                                    <p class="fw-bold m-0"> طراحی و توسعه وبسایت</p>-->
                    <!--                                    <hr class="vr">-->
                    <!--                                    <span>-->
                    <?php //echo get_template_part('template-parts/icons/services/clock');
                    ?><!--</span> --><?php //echo get_the_date('d  F , Y');
                    ?>
                    <!--                                </div>-->
                    <!--                                <h6 class="my-2 fs-4">--><?php //the_title();
                    ?><!--</h6>-->
                    <!--                            </div>-->
                    <!--                            <a class="text-danger fw-bolder" href=""> ادامه مطلب ></a>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                                cta-->
                    <?php get_template_part('template-parts/cta'); ?>
                    <!--            more post-->
                    <?php get_template_part('template-parts/blogpage/more-posts'); ?>
                    <!--            comments-->
                    <div>
                        <h5 class="mb-0 my-5">
                            ارسال نظر
                        </h5>
                        <?php
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                    </div>

                </div>
                <!--    sidebar area-->
                <div class="col-12 col-lg-4">
                    <?php get_template_part('template-parts/sidebar'); ?>
                </div>
            </div>

        </div>
    </section>

<?php endwhile;
wp_reset_query();
get_footer(); ?>
