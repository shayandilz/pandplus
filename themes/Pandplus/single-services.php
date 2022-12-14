<?php
get_header();

while (have_posts()) : the_post();
    gt_set_post_view();
    $service_cat = get_the_terms(get_the_ID(), 'services_categories');
    $service_tags = get_the_terms(get_the_ID(), 'service_tag');
    ?>
    <section class="container z-top position-relative " style="margin-top: 220px">
        <div class="row justify-content-start align-items-start flex-lg-row flex-column-reverse">
            <div class="col-lg-8 col-12 text-white ps-lg-0">
                <h1 class="py-2 border-bottom">
                    <?php the_title(); ?>
                </h1>
                <div class="row justify-content-lg-between justify-content-center align-items-center">
                    <div class="col-lg-6 col-12">
                    </div>
                    <div class="col-lg-6 col-12 text-lg-end text-center mt-3 mt-lg-0">
                        <div class="d-inline">
                            <span class="p-2 m-2 rounded-pill background-blur">
                                    <?php get_template_part('template-parts/SVG/views');
                                    echo gt_get_post_view(); ?>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="text-white py-4 blog-sticky">
                    <?php the_content(); ?>
                </div>
                <?php
                if ($service_tags){ ?>
                    <div class="background-blur w-100 d-flex align-items-center rounded-1 p-2">
                        <span class="badge rounded-1 bg-white me-2 py-2">
                            <?php get_template_part('template-parts/SVG/tags'); ?>
                        </span>
                        <div>
                            <?php
                            foreach ($service_tags as $tag) { ?>
                                <a href="<?php echo get_tag_link($tag->term_id) ?>" class="badge background-blur rounded-1 m-1 p-2">
                                    <?php echo $tag->name ?>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-lg-4 col-12">
                <div class="position-relative service-hover">
                    <div class="rounded-1 overflow-hidden mb-3 background-blur rounded-3 z-top">
                        <?php foreach ($service_cat as $cats) {
                            if ($cats->slug == 'website'){
                                get_template_part('template-parts/services/website');
                            }elseif ($cats->slug == 'social'){
                                get_template_part('template-parts/services/social');
                            }elseif ($cats->slug == 'graphics'){
                                get_template_part('template-parts/services/graphic');
                            }elseif ($cats->slug == 'strategy'){
                                get_template_part('template-parts/services/strategy');
                            }elseif ($cats->slug == 'content'){
                                get_template_part('template-parts/services/content');
                            }
                        } ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php endwhile;
wp_reset_query(); ?>
<?php
get_footer();

