<section class="front__banner position-relative"
    <?php
    $hero_image = get_field('hero_image');
    if ($hero_image) :
        ?>
        style="background-image: url('<?= $hero_image['url'] ?>');
                background-size: cover;
                background-position: top;"
    <?php endif; ?>
>
    <div class="container ">
        <div class="d-inline-flex align-items-center vh-100">
<!--            <div class="col text-danger z-top">-->
<!--                <p class="text-start fw-bold m-0 bg-warning p-2 rounded d-inline-block">-->
<!--                    --><?php //the_field('hero_small_title'); ?>
<!--                </p>-->
<!--                <h1 class="display-2 my-5 bg-warning p-2 rounded fw-bolder">-->
<!--                    --><?php //the_field('hero_title'); ?>
<!--                </h1>-->
<!--                --><?php
//                $blog_page_category_link = get_field('hero_button');
//                if ($blog_page_category_link): ?>
<!--                    <a type="button"-->
<!--                       data-bs-toggle="modal"-->
<!--                       data-bs-target="#exampleModal"-->
<!--                       class="btn btn-dark px-5 py-3 fs-5 rounded-1"-->
<!--                       href="--><?php //echo esc_url($blog_page_category_link['url']); ?><!--">-->
<!--                        --><?php //echo esc_html($blog_page_category_link['title']); ?>
<!--                    </a>-->
<!--                --><?php //endif; ?>
<!--            </div>-->
        </div>
    </div>
        <?php get_template_part('template-parts/icons/logo'); ?>

</section>