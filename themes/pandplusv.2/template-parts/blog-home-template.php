<article class="row w-100 align-items-start text-center text-lg-start justify-content-lg-start py-3">
    <div class="col-12 col-lg-3 d-flex flex-column gap-2 align-items-center">
        <?php $user_array_img = get_field('profile_image', 'user_' . $post->post_author);
        if ($user_array_img) { ?>
            <img class="rounded-circle" width="42px" height="42px" src="<?php echo $user_array_img['url'] ?>"
                 alt="<?php echo $user_array_img['alt'] ?>">
        <?php } else { ?>
            <img class="rounded-circle" width="42px" height="42px"
                 src="<?php echo esc_url(site_url('/wp-content/uploads/2022/06/logo-avatar.png')); ?>"
                 alt="<?php the_title(); ?>">
        <?php } ?>
        <div class="fs-6 text-center">
            ارایه توسط
            <span class="fw-bold text-danger">
                <?php echo get_the_author_meta('display_name', $post->post_author); ?>
            </span>
        </div>
        <div class="fw-normal fs-6 mb-3">
            <?php echo get_the_date('d  F , Y'); ?>
        </div>
    </div>
    <div class="col-12 col-lg-7">
        <a class="text-black " href="<?php the_permalink(); ?>">
            <h4 class="fw-bold fs-5">
                <?php the_title(); ?>
            </h4>
        </a>
        <p class="text-justify">
                      <?= wp_trim_words(get_the_content(), 18); ?>
        </p>
    </div>
    <div class="col-12 col-lg-2 p-0 text-center text-lg-start">
        <div class="d-flex justify-content-center align-items-center flex-row">
            <a href="<?php the_permalink(); ?>"
               class="text-black">
                ادامه مطلب
                <i class="bi bi-arrow-left text-black"></i>
            </a>
        </div>
    </div>
</article>