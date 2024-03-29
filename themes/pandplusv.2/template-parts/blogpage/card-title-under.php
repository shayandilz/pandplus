<div class="col-12 col-lg my-2 hover-shadow">
    <a href="<?php the_permalink(); ?>">
        <img height="auto" class="col-12 image-rounded-min ratio ratio-1x1" src="<?php echo get_the_post_thumbnail_url(); ?> "
              alt="">
        <div class="align-items-center text-danger">
            <!--                category-->
            <div class="m-0 pt-1 fs-6">
                <?php
                $category_detail = get_the_category($post->ID);//$post->ID
                foreach ($category_detail as $category) { ?>
                    <span class="text-decoration-none me-2 small fw-lighter">
                        <?php echo $category->name ?>
                    </span>
                <?php } ?>
            </div>
            <p class="m-0 py-1">
                <span><?php  get_template_part('template-parts/icons/services/clock');?></span> <?php echo get_the_date('d  F , Y'); ?>
            </p>
        </div>
        <h4 class="fw-bolder fs-6 text-danger">
            <?php echo get_the_title(); ?>
        </h4>
    </a>
</div>