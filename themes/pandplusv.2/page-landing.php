<?php
/** Template Name: landing */

get_header(); ?>
<section class="container my-5 py-5">
    <h1><?= the_title(); ?></h1>
    <article class="pt-5">
        <?= the_content(); ?>
    </article>
</section>



<?php get_footer(); ?>
