<a href="<?php echo get_the_permalink();?>" class="d-flex my-2">
    <img class="col-3 me-2  object-fit" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
    <div>
        <div class="d-flex align-items-center gap-1 text-danger">
            <p class="m-0">  طراحی و توسعه وبسایت</p>
            <hr class="vr">
            <span><?php  get_template_part('template-parts/icons/services/clock');?></span> <?php echo get_the_date('d  F , Y'); ?>
        </div>
        <h6 class="fw-bolder text-danger"><?php echo get_the_title();?></h6>
    </div>
</a>