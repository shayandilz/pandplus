<a href="<?php echo get_the_permalink();?>" class="card-main d-flex col-11 shadow col-lg position-relative overflow-hidden align-items-lg-end  align-items-center g-0">
    <img class="object-fit position-absolute w-100 h-100 start-0" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
    <div class="z-top pb-lg-3 text-white px-3 bg-danger card-info w-100">
        <div class="align-items-center gap-1">
            <div class="m-0">
                <?php
                $category_detail = get_the_category($post->ID);//$post->ID
                foreach ($category_detail as $category) { ?>
                    <span class="text-decoration-none me-2 small fw-lighter">
                        <?php echo $category->name ?>
                    </span>
                <?php } ?>
            </div>
            <span><?php  get_template_part('template-parts/icons/services/clock');?></span> <?php echo get_the_date('d  F , Y'); ?>
        </div>
        <h6 class="fs-6 fw-bolder"><?php echo get_the_title();?></h6>
    </div>
</a>