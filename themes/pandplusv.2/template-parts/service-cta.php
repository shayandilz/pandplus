<div class="d-lg-flex justify-content-between align-items-center">
    <div class="mb-2 mb-lg-0">
        <?php get_template_part('template-parts/icons/phone-secondary'); ?>
        <span class="px-2">مشاوره رایگان با کارشناسان پندپلاس</span>
    </div>
    <a href="tel:<?php the_field('call_number_service', 'option') ?>" class="bg-success text-secondary px-3 py-2 rounded-3">
        <?php the_field('call_number_service', 'option') ?>
    </a>
</div>
