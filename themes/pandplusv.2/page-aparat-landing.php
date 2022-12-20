<?php
/** Template Name: Aparat landing */

get_header(); ?>

<section class="container pt-5 mt-5 pb-3">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-12 col-lg-8 p-0">
                <h1 class="text-center text-dark fw-bold py-1 animate__animated animate__fadeInUp animate__delay-2s">
                    <?= get_field('title_page');?></h1>
                <div class=" animate__animated animate__fadeIn">
                <?= get_field('aparat_link');?>
                </div>
            </div>
        </div>

</section>

<section class="pb-5 bg-warning">
<?php
get_template_part('template-parts/homepage/cta');
get_template_part('template-parts/homepage/services');
?>
</section>
    <?php
get_footer(); ?>
