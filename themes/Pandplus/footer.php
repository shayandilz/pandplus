<footer class="py-5 text-white z-top overflow-visible position-relative">
    <div class="container py-3">
        <div class="row align-items-center justify-content-md-between justify-content-center">
            <div class="col-md-4 col-12 text-lg-start text-center my-4 my-md-0 order-1 order-md-first">
                <span>طراحی با افتخار توسط پند پلاس</span>
            </div>
            <div class="col-md-4 col-6 text-center my-4 my-md-0">
                <a class="navbar-brand" href="<?= esc_url(site_url()); ?>">
                    <?= get_field('site_logo', 'option'); ?>
                </a>
            </div>
            <div class="col-md-4 col-6 text-md-end text-center my-4 my-md-0">
                <ul class="list-group list-group-horizontal list-unstyled justify-content-lg-end justify-content-center">
                    <?php if (have_rows('social_footer','option')):
                    while (have_rows('social_footer','option')): the_row();
                    ?>
                    <li class="me-2">
                        <a href="<?php the_sub_field('Link'); ?>" class="background-radial text-white btn btn-gold p-md-3 p-2 rounded-1">
                            <?php the_sub_field('icon'); ?>
                        </a>
                    </li >
                    <?php endwhile; ?>
                    <?php endif;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>