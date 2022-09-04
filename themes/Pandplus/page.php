<?php

get_header(); ?>


    <main class="container z-top position-relative default-margin-top min-vh-100">
        <section class="row  justify-content-lg-start justify-content-center align-items-start border-bottom">
            <div class="col-12">
                <h1 class="py-2 text-white"><?php the_title(); ?></h1>
            </div>
        </section>
        <section class="row py-3">
            <div class="col-12 text-white">
                <?php the_content(); ?>

            </div>
        </section>
    </main>


<?php get_footer();
