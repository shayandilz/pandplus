<article class="col row align-items-start mx-0 my-2 my-lg-0">
    <div style="width: 94px;height: 94px">
        <?= get_field('service_icon'); ?>
    </div>
    <div class="col-12">
        <a class="text-black " href="<?php the_permalink(); ?>">
            <h4 class="fw-bolder title-card py-3 text-danger">
                <?= get_the_title(); ?>
                <span>> </span>
            </h4>
            <p>
                <?= wp_trim_words(get_the_content(), 18); ?>
            </p>
        </a>
</article>