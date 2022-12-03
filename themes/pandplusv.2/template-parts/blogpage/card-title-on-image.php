<a href="<?php echo get_the_permalink();?>" class="d-flex col-11 col-lg position-relative overflow-hidden align-items-lg-end  align-items-center gx-2">
    <img class="object-fit position-absolute w-100 h-100 start-0" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
    <div class="z-top pb-lg-3 mb-lg-1 text-white px-3 h-100p">
        <div class="d-flex align-items-center gap-1">
            <p class="m-0">  طراحی و توسعه وبسایت</p>
            <hr class="vr">
            <span><?php  get_template_part('template-parts/icons/services/clock');?></span> <?php echo get_the_date('d  F , Y'); ?>
        </div>
        <h6 class="fs-4 fw-bolder"><?php echo get_the_title();?></h6>
    </div>
</a>