<?php
/** Template Name: single services */

get_header(); ?>
<!--top banner-->
<section class="container mt-lg-0 mt-5 overflow-hidden">
    <div class="row justify-content-evenly align-items-start h-100">
        <!--            cta-->
        <div class="col-12 col-lg-5 text-danger my-auto pt-4">
            <h1 class="display-3 fw-bolder"><?php the_title(); ?></h1>
            <article class="my-4 text-justify">
                <?php echo the_content(); ?>
            </article>
            <div class="d-flex justify-content-between align-items-center pe-lg-3 my-3">
                <!--                <button class="btn bg-danger px-4 py-2 rounded text-white">تعرفه های خدمات سئو</button>-->
                <?php
                $blog_page_category_link = get_field('blog_page_category_link');
                if ($blog_page_category_link): ?>
                    <a class="btn btn-dark px-4 py-2 rounded text-white"
                       href="<?php echo esc_url($blog_page_category_link['url']); ?>">
                        <?php echo esc_html($blog_page_category_link['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
            <!--            call details-->
            <?php get_template_part('template-parts/service-cta'); ?>
            <!--            costumers -->
            <div>
                <p class="mt-5">برخی از مشتریان ما</p>
                <div class="d-flex flex-row gap-2 align-items-start flex-wrap justify-content-center">
                    <?php
                    $projects_services = get_field('projects_services');
                    if ($projects_services) :
                        foreach (array_slice($projects_services , 0 , 8) as $post):
                            setup_postdata($post);
                            $brand_logo = get_field('brand_logo');
                            ?>
                            <a href="<?php the_permalink();?>">
                                <img class="img-fluid w-100p" src="<?php echo esc_url($brand_logo['url']); ?>"
                                     alt="<?php echo esc_attr($brand_logo['alt']); ?>">

                            </a>
                        <?php endforeach;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
        <!--            scrolling cards-->
        <div class="overflow-hidden col-12 col-lg-5 swiper3 vh-100 d-none d-lg-block animate__animated
        animate__fadeInUp">
            <div class="swiper-wrapper ">
                <?php
                $projects_services = get_field('projects_services');
                if ($projects_services) :
                    foreach ($projects_services as $post):
                        setup_postdata($post); ?>
                        <img style="height:300px" class="swiper-slide rounded-2" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <?php endforeach;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
<!--        more services-->
        <div class="col-12 col-lg-5 py-4 swiper4 overflow-hidden d-lg-none d-block">
            <div class="swiper-wrapper align-items-center">
                <?php
                if ($projects_services) :
                    foreach ($projects_services as $post):
                        setup_postdata($post); ?>
                        <img class="swiper-slide rounded-2" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <?php endforeach;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>

    </div>
</section>
<?php if (have_rows('workflow_steps')): $i = 0 ?>
    <!--The steps of website design-->
    <section class="bg-secondary py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12 row gap-0 gap-lg-4 justify-content-center">
                    <div class="col-12 px-md-5 px-2 text-center justify-content-center pb-5 text-danger">
                        <p>
                            <?php the_field('workflow_small_title') ?>
                        </p>
                        <h4 class="fs-4 fw-bolder">
                            <?php the_field('workflow_title') ?>
                        </h4>
                        <p class="px-md-5 col-md-6 mx-auto">
                            <?php the_field('workflow_text') ?>
                        </p>
                    </div>
                    <?php $j= 15 ;?>
                    <ul class="list-unstyled row gap-lg-4 gap-0 justify-content-lg-start justify-content-center">
                        <?php while (have_rows('workflow_steps')): the_row();;
                            $i++;
                            $j+=20;
                            ?>
                            <li     data-animate="<?= $j; ?>"
                                    class="col-md-4 col-12 px-lg-2 px-0 row justify-content-center gs_reveal gs_reveal_fromRight">
                                <div class="col-2 display-1 fw-bold text-white"><?= $i; ?></div>
                                <div class="col">
                                    <p class="text-danger">
                                        <?php the_sub_field('small_title'); ?>
                                    </p>
                                    <h4 class="fw-bolder text-danger">
                                        <?php the_sub_field('title'); ?>
                                    </h4>
                                    <p class="text-justify text-danger">
                                        <?php the_sub_field('text'); ?>
                                    </p>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!--informaion and image-->
<section class="container py-lg-5 my-lg-5 position-relative d-none">
    <!--    <span class="position-absolute end-0 top-50">-->
    <!--        --><?php //get_template_part('template-parts/lines/ver-hor-line-big'); ?>
    <!--    </span>-->
</section>
<!--testimony-->
<!--<section class="bg-danger text-white">-->
<!--    --><?php //get_template_part('template-parts/testimony'); ?>
<!--</section>-->
<!--portfolio-->
<section class="container py-5">
    <div class="row justify-content-center">
        <div class="row col-lg-10 col-12 justify-content-center">
            <div class="row justify-content-center">
                <!--                title-->
                <div class="col-12 col-lg-6 text-center my-3">
                    <h4 class="fs-4 text-danger fw-bolder mb-4"><?php the_field('portfolio_title'); ?></h4>
<!--                    <h3 class=" fw-bolder">-->
<!--                        --><?php //the_field('portfolio_text'); ?>
<!--                    </h3>-->
                </div>
                <div class="swiper swiper2">
                    <div class="swiper-wrapper">
                        <?php
                        $projects_services = get_field('projects_services');
                        if ($projects_services) :
                            foreach ($projects_services as $post):
                                setup_postdata($post); ?>

                                <div class="swiper-slide all-dark">
                                    <?php get_template_part('template-parts/portfolio-home-template'); ?>
                                </div>
                            <?php endforeach;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--services-->
<section id="services__area" class="bg-danger pt-5">
    <div class="container overflow-hidden">
        <div class="row justify-content-center ">
            <?php get_template_part('template-parts/service-show'); ?>
        </div>
</section>
<?php //get_template_part('template-parts/faq'); ?>
<?php get_footer(); ?>
