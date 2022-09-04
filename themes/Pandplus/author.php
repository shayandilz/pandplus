<?php
get_header();

$author = get_user_by('slug', get_query_var('author_name'));

$author_query = array(
    'post_type' => 'portfolio',
    'posts_per_page' => '-1',
    'meta_query' => array(
        array(
            'key' => 'team_member',
            'value' => $author->ID,
            'compare' => 'LIKE'
        )
    )
);
$author_posts = new WP_Query($author_query);

?>
    <main class="container-fluid container-lg z-top position-relative default-margin-top min-vh-100">
        <main class="container-fluid container-lg z-top position-relative default-margin-top min-vh-100">
            <section class="row mx-1 justify-content-lg-start justify-content-center align-items-start">
                <div class="col-lg-10 col-8">
                    <h1 class="py-2 text-white"><?php echo $author->display_name ?></h1>
                </div>
                <?php
                $website_url = get_field('user_website');
                if ($website_url) :
                    ?>
                    <div class="col-lg-2 col-4 text-end">
                        <a class="background-radial rounded-1 text-white btn btn-gold"
                           href="<?= $website_url ?>">
                    <span class="d-md-inline">
                       آدرس وبسایت
                    </span>
                        </a>
                    </div>
                <?php endif; ?>
                <div class="col-12 position-relative d-flex align-items-center">
                    <ul class="list-unstyled mb-0 p-2 overlay-top no-hide">
                        <?php $user_array_img = get_field('profile_image', 'user_' . $author->ID); ?>
                        <li class="d-inline-block">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" width="45px" height="45px"
                                 title="<?php echo the_author_meta('display_name'); ?> "
                                 class="object-fit rounded-circle d-block"
                                 src="<?php echo $user_array_img['url'] ?>"
                                 alt="<?php echo $user_array_img['alt'] ?>">

                        </li>
                    </ul>
                </div>

                <div class="row mt-5 text-white justify-content-center background-blur py-2 px-2 rounded-1">
                    <div class="col-lg-6 col-12">
                        <h5 class="mb-1">چکیده</h5>
                        <p>
                            <?php echo get_user_meta($author->ID, 'description', true) ?>
                        </p>
                    </div>
                    <div class="col-lg-3 col-12">
                        <h5 class="mb-1">مهارت ها</h5>
                        <?php // Load field settings and values.
                        $service_done = get_field('skills');

                        // Display labels.
                        if ($service_done): ?>
                            <ul class="list-unstyled text-start">
                                <?php foreach ($service_done as $services): ?>
                                    <li class="py-2"><?php echo $services; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <?php
                    $users_social = get_field('users_social');
                    if ($users_social): ?>
                        <div class="col-lg-3 col-12">
                            <h5 class="mb-1">شبکه های اجتماعی</h5>
                            <ul class="list-unstyled d-inline-flex gap-3">
                                <?php foreach ($users_social as $user_social):
                                    $svg = $user_social['svg'];
                                    $link = $user_social['url'];
                                    ?>
                                    <li>
                                        <a class="text-white user-svg" href="<?= $link; ?>">
                                            <?php if($svg == 'Instagram'){
                                                get_template_part('template-parts/SVG/instagram');
                                            } elseif ($svg == 'Facebook'){
                                                get_template_part('template-parts/SVG/facebook');
                                            }elseif ($svg == 'Dribble'){
                                                get_template_part('template-parts/SVG/dribble');
                                            }elseif ($svg == 'Youtube'){
                                                get_template_part('template-parts/SVG/youtube');
                                            }elseif ($svg == 'Linkedin'){
                                                get_template_part('template-parts/SVG/linkedin');
                                            } ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <ul class="list-unstyled row mt-5 text-white">
                    <?php if ($author_posts->have_posts()) :
                        while ($author_posts->have_posts()) :
                            $author_posts->the_post(); ?>
                            <li class="col-lg-4 col-6">
                                <article>
                                    <a href="<?php the_permalink(); ?>"
                                       class="card mb-2 hover-shadow border-0 lazy rounded-1 services">
                                        <div class="ratio lazy ratio-4x3 overflow-hidden rounded-1">
                                            <img class="object-fit"
                                                 src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                 alt="<?php the_title(); ?>">
                                        </div>
                                        <div class="overlay-bottom background-blur p-3 rounded-1 position-absolute z-top">
                                            <h6 class="my-2">
                                                <span class="link-white lazy"><?php the_title(); ?></span>
                                            </h6>
                                        </div>
                                    </a>
                                </article>
                            </li>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </ul>
            </section>
        </main>

    </main>


<?php get_footer();