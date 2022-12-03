<article class="col row align-items-start">
   <?php get_template_part('template-parts/icons/services-icon'); ?>
    <div class="col-12">
        <a class="text-black " href="<?php the_permalink(); ?>">
            <h4 class="fw-bolder title-card py-3 text-danger">
                <?php echo get_the_title(); ?>
                <span >> </span>
            </h4>
            <p><?php echo wp_trim_words(get_the_content() , 18);?></p>
        </a>


</article>