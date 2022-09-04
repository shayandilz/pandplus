<section id="first_section" class="svg-section py-5 position-relative z-top">
    <div class="container h-100 text-white text-center z-top section-1">
        <?php if (have_rows('services_list')): $i = 0;
            while (have_rows('services_list')): the_row();?>
                <div class="row align-items-lg-start align-items-center">
                    <div class="col-lg-5 col-12 col-xl-4 position-relative">
                        <div class="background-service rounded-3 h-auto p-1 p-lg-3 wow animate__animated animate__fadeInUp">
                            <h2 class="fs-4"><?php the_sub_field('title'); ?></h2>
                            <?php the_sub_field('text'); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata();
        ?>
    </div>
    <div class="position-absolute start-0 top-0 w-100 h-100 justify-content-center d-none d-lg-flex"
         style="z-index: -1">
        <?php get_template_part('template-parts/SVG/main-svg'); ?>
    </div>
    <div class="position-absolute start-0 top-0 w-100 h-100 justify-content-center d-block d-lg-none"
         style="z-index: -1">
        <?php get_template_part('template-parts/SVG/main-svg-R'); ?>
    </div>
</section>
