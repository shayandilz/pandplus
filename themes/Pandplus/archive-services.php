<?php
/* Template Name: Services */
get_header(); ?>


    <section class="container z-top position-relative default-margin-top">
        <div class="row justify-content-start align-items-start  text-white">
            <h1 class="py-2"><?php

                echo post_type_archive_title();
                ?></h1>
            <div class="mb-2">
                <div class="row justify-content-center list-unstyled">
                    <?php
                    $args = array(
                        'post_type' => 'services',
                        'post_status' => 'publish',
                        'ignore_sticky_posts' => 1,
                        'posts_per_page' => -1,
                    );
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()) {
                        while ($loop->have_posts()) : $loop->the_post();
                            $service_cat = get_the_terms(get_the_ID(), 'services_categories');
                        ?>
                            <li class="col-lg col-6">
                                <a href="<?php the_permalink(); ?>"
                                   class="card mb-2 border-0 lazy rounded-1 no-translate overflow-hidden" style="isolation: isolate">
                                    <div class="ratio lazy ratio-1x1 background-blur service-hover">
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

                                    <div class="background-blur-insta p-3 rounded-1z-top d-flex justify-content-between align-items-center">
                                        <h6 class="my-2">
                                            <span class="link-white lazy">
                                                <?php the_title(); ?>
                                            </span>
                                        </h6>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                             viewBox="0 0 24 25" fill="none">
                                            <path d="M17.5 12.5L6.5 12.5M6.5 12.5L11.0882 16.5M6.5 12.5L11.0882 8.5"
                                                  stroke="white" stroke-width="1.5"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile;
                    }
                    wp_reset_postdata() ?>
                </div>
            </div>

        </div>
    </section>

<?php
get_footer();
