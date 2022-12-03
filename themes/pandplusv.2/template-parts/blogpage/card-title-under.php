<div class="col-12 col-lg my-2">
    <a href="<?php the_permalink(); ?>">
        <img class="col-12 image-rounded-min ratio ratio-1x1" src="<?php echo get_the_post_thumbnail_url(); ?> " alt="">
        <div class="d-flex pt-3 align-items-center text-danger">
            <!--                category-->
            <div class="m-0  fs-6">
                <?php
                $category_detail = get_the_category($post->ID);//$post->ID
                foreach ($category_detail as $category) { ?>
                    <span class="text-decoration-none me-2 small fw-lighter">
                        <?php echo $category->name ?>
                    </span>
                <?php } ?>
            </div>
            <hr class="vr ms-1">
            <p class="m-0">
                <?php  get_template_part('template-parts/icons/clock');?>
                <!--                    date-->
                <span>۱۴۰۰ بهمن ۲۲</span>
            </p>
        </div>
        <h4 class="fw-bolder fs-6 text-danger">
            <?php echo get_the_title(); ?>
        </h4>
    </a>
</div>