<section class="front__banner position-relative">
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <?php
        $hero_image_desktop = get_field('hero_image_desktop');
        $hero_image_mobile = get_field('hero_image_mobile');
        ?>
        <img src="<?= $hero_image_desktop['url'] ?>" class="d-none d-lg-inline w-100 h-100 object-fit">
        <img src="<?= $hero_image_mobile['url'] ?>" class="d-inline d-lg-none w-100 h-100 object-fit">
    </div>
    <div class="container">
        <div class="d-inline-flex align-items-start mt-5">
            <div class="col text-warning text-center z-top  mt-5">
                <div>
                    <h1 id="text" class="fw-bolder display-5 p-lg-2 p-0 m-0">

                    </h1>
                </div>
                <br>
                <h5 class="fs-3 p-lg-2 fw-bold text-appear">
                    <?php the_field('hero_title'); ?>
                </h5>
                <br>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/icons/logo'); ?>

</section>