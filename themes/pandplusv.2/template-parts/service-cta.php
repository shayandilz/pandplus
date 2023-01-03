<div class="d-flex justify-content-start justify-content-lg-evenly flex-wrap align-items-center">
    <div class="mb-2 mb-lg-0">
        <?php get_template_part('template-parts/icons/phone-secondary'); ?>
        <span class="px-2">مشاوره رایگان با کارشناسان پندپلاس</span>
    </div>
    <a href="tel:<?php the_field('call_number_service', 'option') ?>" class="cta-footer text-secondary px-3 pt-2
    rounded-3 shadow-sm">
        <?php the_field('call_number_service', 'option') ?>
    </a>
</div>
