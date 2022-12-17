<?php $categories = get_categories(); ?>
<div class=" px-3 py-2 d-flex flex-wrap gap-1 align-items-center">
    <span>
        <?php get_template_part('template-parts/icons/tag-icon'); ?>
    </span>
    <?php
    foreach ($categories as $category) { ?>
        <a href="<?= get_category_link($category->term_id) ?>"
           class="bg-success rounded shadow-sm text-decoration-none py-2 px-2 me-1 text-danger">
            <?php echo $category->name ?>
        </a>
    <?php } ?>
</div>