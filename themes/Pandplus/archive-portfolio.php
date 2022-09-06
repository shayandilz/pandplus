<?php
/* Template Name: Portfolio */
get_header();

$args_cat = array(
    'taxonomy' => 'portfolio_categories',
    'orderby' => 'name',
    'order' => 'ASC'
); 
$cats = get_categories($args_cat);
?>
    <section class="container z-top position-relative default-margin-top min-vh-100">
        <div class="row justify-content-start align-items-start">
            <h1 class="py-2 text-white">آخرین نمونه کارها</h1>
            <div class="mb-2">
                <ul class="nav nav-tabs border-0 w-fit-content mx-auto px-md-5 px-3 mb-4 gap-2" id="myTab" role="tablist">

                    <?php
                    $i = 0;
                    foreach ($cats as $key => $cat) { ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link py-md-4 px-lg-4 px-md-3 p-2 lazy
                        <?php if ($i == 0) {
                                $i = 1;
                                echo 'active';
                            }
                            ?> position-relative"
                                    id="cat-<?php echo $cat->term_taxonomy_id ?>-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#cat-<?php echo $cat->term_taxonomy_id ?>"
                                    type="button" role="tab"
                                    aria-controls="cat-<?php echo $cat->term_taxonomy_id ?>"
                                    aria-selected="true">
                                <?php echo $cat->name; ?>
                                <span class="position-absolute top-0 start-100 translate-middle-x">
                                     <?php echo $cat->category_count; ?>
                                </span>
                            </button>
                        </li>
                    <?php }
                    wp_reset_postdata() ?>
                </ul>

                <div class="tab-content" id="myTabContent" role="tablist">
                    <?php
                    foreach ($cats as $key => $cat) { ?>
                        <div class="tab-pane fade <?php if ($key == 0) {
                            echo 'show active';
                        } ?>" id="cat-<?php echo $cat->term_taxonomy_id ?>" role="tabpanel"
                             aria-labelledby="cat-<?php echo $cat->term_taxonomy_id ?>-tab">
                            <ul class="row list-unstyled gap-4 gap-lg-0">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'ignore_sticky_posts' => 1,
                                    'posts_per_page' => 8,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'portfolio_categories',
                                            'field' => 'term_id',
                                            'terms' => $cat->term_taxonomy_id,
                                            'operator' => 'IN'
                                        )
                                    )
                                );
                                $loop = new WP_Query($args);
                                if ($loop->have_posts()) {
                                    while ($loop->have_posts()) : $loop->the_post(); ?>
                                        <li class="col-lg-4 col-12">
                                            <?php get_template_part('template-parts/portfolio-card'); ?>
                                        </li>
                                    <?php endwhile;
                                }
                                wp_reset_postdata() ?>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!--            @include('partials.pagination')-->
        </div>
    </section>

<?php
get_footer();
