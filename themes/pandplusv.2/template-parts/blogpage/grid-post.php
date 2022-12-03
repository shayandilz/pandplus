<a href="<?php echo get_the_permalink(); ?>" class="d-flex my-2">
    <img class="col-3 me-2  object-fit" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    <div>
        <div class="d-flex align-items-center gap-1 text-danger">
            <div class="m-0 d-inline-flex gap-3 justify-content-start">
                <?php
                $category_detail = get_the_category($post->ID);//$post->ID
                foreach ($category_detail as $category) { ?>
                    <span class="text-decoration-none me-2 small fw-lighter">
                        <?php echo $category->name ?>
                    </span>
                <?php } ?>
            </div>
            <hr class="vr">
            <span>
                <?php get_template_part('template-parts/icons/services/clock'); ?>
            </span>
            <?php echo get_the_date('d  F , Y'); ?>
        </div>
        <h6 class="fw-bolder text-danger"><?php echo get_the_title(); ?></h6>
    </div>
</a>