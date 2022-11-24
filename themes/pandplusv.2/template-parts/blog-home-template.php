<article class="row w-100 align-items-start">
    <div class="col-3 d-flex flex-column gap-2 justify-content-center align-items-start">
        <?php $user_array_img = get_field('profile_image', 'user_' . $post->post_author);
        if ($user_array_img) { ?>
            <img class="rounded-circle" width="42px" height="42px" src="<?php echo $user_array_img['url'] ?>"
                 alt="<?php echo $user_array_img['alt'] ?>">
        <?php } else { ?>
            <img class="rounded-circle" width="42px" height="42px"
                 src="<?php echo esc_url(site_url('/wp-content/uploads/2022/06/logo-avatar.png')); ?>"
                 alt="<?php the_title(); ?>">
        <?php } ?>
        <div>
            ارایه توسط
            <span class="fw-normal text-primary">
                <?php echo get_the_author_meta('display_name', $post->post_author); ?>
            </span>
        </div>
        <div class="fw-normal">
            <?php echo get_the_date('d  F , Y'); ?>
        </div>
    </div>
    <div class="col-7">
        <a class="text-black " href="<?php the_permalink(); ?>">
            <h4 class="fw-bolder">
                <?php the_title(); ?>
            </h4>
        </a>
        <p>
            <?php
            $excerpt = get_the_excerpt();
            $excerpt = substr($excerpt, 0, 200);
            $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
            $excerpt = trim(preg_replace('/\s+/', ' ', $excerpt));

            echo $excerpt . '...';
            ?>
        </p>
    </div>
    <div class="col-2">
        <div class="d-flex justify-content-center align-items-center flex-row">
            <a href="<?php the_permalink(); ?>"
               class="text-black">
                ادامه مطلب
                <i class="bi bi-arrow-left text-black"></i>
            </a>
        </div>
    </div>
</article>