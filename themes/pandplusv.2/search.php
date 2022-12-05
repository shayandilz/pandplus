<?php get_header(); ?>
<div class="container py-5">
    <?php
    if (have_posts()) { ?>
        <div class="row my-3 row-cols-lg-4 row-cols-2">
            <?php while (have_posts()) {
                the_post();
                get_template_part('template-parts/blogpage/card-title-under');

            } ?>
        </div>
        <?php
        $links = paginate_links(array(
            'type' => 'array',
            'prev_next' => false,

        ));
        if ($links) : ?>
            <nav aria-label="age navigation example">
                <?php echo '<ul class="pagination justify-content-center align-items-center">';
                // get_previous_posts_link will return a string or void if no link is set.
                if ($prev_posts_link = get_previous_posts_link(__('قبلی'))) :
                    echo '<li class="prev-list-item page-item me-4">';
                    echo $prev_posts_link;
                    echo '</li>';
                endif;
                echo '<li class="page-item me-4">';
                echo join('</li><li class="page-item me-4">', $links);
                echo '</li>';

                // get_next_posts_link will return a string or void if no link is set.
                if ($next_posts_link = get_next_posts_link(__('بعدی'))) :
                    echo '<li class="next-list-item page-item me-4">';
                    echo $next_posts_link;
                    echo '</li>';
                endif;
                echo '</ul>';
                ?>
            </nav>
        <?php endif;
    } else {
        echo '<h2 class="headline headline--small-plus">نتیجه ای یافت نشد</h2>';
    }
    ?>

</div>


<?php get_footer(); ?>
