<?php
get_header();
?>

    <section class="vh-65 d-flex flex-column justify-content-center align-items-center my-5 pt-5 pb-lg-5">
        <article class="z-top position-relative text-center row justify-content-center">
            <div class="col-11 col-lg-8 row justify-content-center p-0">
                <h1 class="display-4 fw-bolder my-auto text-dark">
                    ما پند پلاس هستیم و <br/> سایت های زیبا طراحی میکنیم
                </h1>
                <p class="col-lg-8 my-4">طرح های شبکه متمرکز بر محتوا، عناصر اجتماعی منحصر به فرد، عملکرد پس از اشتراک
                    گذاری، قرار گرفتن در معرض نویسنده و موارد دیگر!</p>
                <?php get_template_part('template-parts/counseling-call'); ?>
                <div class="col-lg-8">
                    <?php get_template_part('template-parts/service-cta'); ?>
                </div>
            </div>

        </article>
    </section>
<?php
get_footer(); ?>