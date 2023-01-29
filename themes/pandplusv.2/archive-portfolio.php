<?php
get_header();
$portfolio = array(
    'post_type' => 'portfolio',
    'post_status' => 'publish',
    'posts_per_page' => '-1',
    'ignore_sticky_posts' => true
);
$loop_portfolio = new WP_Query($portfolio);
?>

<section class="d-flex flex-column justify-content-center align-items-center my-5 pt-5 pb-5">
    <article class="z-top position-relative text-center row justify-content-center">
        <div class="col-11 col-lg-8 row justify-content-center p-0">
            <h1 class="display-4 fw-bolder my-auto text-dark">
                ما پند پلاس هستیم و <br/> سایت های زیبا طراحی میکنیم
            </h1>
            <p class="col-lg-8 my-4">طرح های شبکه متمرکز بر محتوا، عناصر اجتماعی منحصر به فرد، عملکرد پس از اشتراک
                گذاری، قرار گرفتن در معرض نویسنده و موارد دیگر!</p>
            <?php get_template_part('template-parts/counseling-call'); ?>
            <div class="col-lg-8">
                <?php get_template_part('template-parts/service-cta'); ?>
            </div>
        </div>

    </article>
</section>
<section class="container pb-5 mb-5">
    <ul class="nav nav-tabs border-0 w-fit-content mx-auto px-3 gap-2 overflow-hidden justify-content-center" id="myTab"
        role="tablist">

        <?php
        $args_cat = array(
            'taxonomy' => 'portfolio_categories',
//            'hide_empty'=> false,
            'orderby' => 'name',
            'order' => 'ASC'
        );
        $cats = get_categories($args_cat);
        $s= 0;
        $i = 0;
        foreach ($cats as $key => $cat) { ?>
            <li class="nav-item animate__animated animate__slideInUp animate__delay-<?= $s;?>s" role="presentation">
                <button class="bg-secondary nav-link py-md-3 px-lg-4 px-md-3 p-2 lazy
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
                </button>
            </li>
        <?php $s++;
        }
        wp_reset_postdata() ?>
    </ul>
    <div class="tab-content p-3 bg-warning mb-4 rounded-1 shadow-sm" id="myTabContent" role="tablist">
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
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'portfolio_categories',
                                'orderby' => 'name',
                                'order' => 'ASC',
                                'field' => 'term_id',
                                'terms' => $cat->term_taxonomy_id,
                                'operator' => 'IN'
                            )
                        )
                    );
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()) {
                        while ($loop->have_posts()) : $loop->the_post(); ?>
                        <li class="p-3 col-12 col-md-4">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?= get_the_post_thumbnail_url(); ?>" class="h-auto card-img-top
                                image-rounded-min"
                                     alt="<?php the_title(); ?>">
                                <div class="card-body text-black">
                                    <h5 class="card-title py-2 fw-bolder text-center"><?php the_title(); ?></h5>
                                    <p class="card-text text-justify"><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                                </div>
                            </a>
                        </li>
                        <?php endwhile;
                    }
                    wp_reset_postdata() ?>
                </ul>
            </div>
        <?php } ?>
    </div>
</section>
<?php
get_footer(); ?>

