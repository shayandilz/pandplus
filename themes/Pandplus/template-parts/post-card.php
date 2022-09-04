<a href="<?php the_permalink(); ?>"
   class="card border-0 lazy rounded-1 my-0 no-translate fw-normal">
    <div class="ratio lazy" style="--bs-aspect-ratio: 140%;">
        <img class="object-fit lazy"
             src="<?php echo get_the_post_thumbnail_url() ?>"
             alt="<?php the_title(); ?>">
    </div>
    <div class="d-inline position-absolute bottom-0 start-0 end-0 vstack justify-content-end p-3 m-lg-3 m-2 background-blur-dark m-3 rounded-1">
        <span class="badge background-blur text-start">
            <?php
            $cats = get_the_category();
            echo $cats[0]->name;
            ?>
        </span>
        <h6 class="mt-4 mb-1">
            <?php the_title(); ?>
        </h6>
        <div class="row justify-content-lg-start justify-content-between align-items-center">
            <div class="col-2">
                <?php get_template_part('template-parts/author'); ?>
            </div>
            <div class="col-10  d-flex flex-column justify-content-start text-white ">
                    <span class="fw-normal">
                        <?php echo get_the_author_meta('display_name', $post->post_author); ?>
                    </span>
                <div class="col-12 text-white-50 fw-normal">
                    <?php echo get_the_date('d  F , Y'); ?>
                </div>
            </div>
        </div>
    </div>
</a>