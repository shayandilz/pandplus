<div class="row my-5">
    <div class="col-12">
        <?php $links = paginate_links(array(
            'type' => 'array',
            'prev_next' => false,

        ));
        if ($links) : ?>
            <nav aria-label="age navigation example">
                <?php echo '<ul class="pagination justify-content-center align-items-center">';
                // get_previous_posts_link will return a string or void if no link is set.
                if ($prev_posts_link = get_previous_posts_link(__('قبلی'))) :
                    echo '<li class="prev-list-item page-item me-4 ">';
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
        <?php endif; ?>
    </div>
</div>