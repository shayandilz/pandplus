<?php $categories = get_categories(); ?>
<h6 class="bg-success rounded px-3 py-2 shadow-sm">
    <span>
        <?php get_template_part('template-parts/icons/tag-icon'); ?>
    </span>
    <?php
    foreach ($categories as $category) { ?>
        <a href="<?= get_category_link($category->term_id) ?>"
           class="text-decoration-none py-2 px-1 me-1 text-danger">
            <?php echo $category->name ?>
        </a>
    <?php } ?>
</h6>