<div class="row justify-content-center">
    <div class="d-flex col-11 col-lg-7 cta-footer image-rounded p-4 shadow-sm z-top">
        <!--    Whatsapp    -->
        <div class="col-6 col-lg-3 d-flex flex-column align-items-center justify-content-center gap-3 text-center ">
            <?php get_template_part('template-parts/icons/whatsapp');
            $whatsapp = get_field('whatsapp', 'option');
            ?>
            <h6 class="text-black fs-3 fw-bold">
                <?= esc_html($whatsapp['title']) ?>
            </h6>
            <a class="text-black d-flex flex-row justify-content-center align-items-center text-center gap-2"
               href="<?php echo esc_url($whatsapp['number']); ?>">
                چت واتساپ
                <i class="bi bi-chevron-left"></i>
            </a>
        </div>
        <!--    Phone    -->
        <div class="col-6 col-lg-3 d-flex flex-column align-items-center justify-content-center gap-3 text-center">
            <?php get_template_part('template-parts/icons/phone');
            $phone = get_field('phone', 'option');
            ?>
            <h6 class="text-black fs-3 fw-bold">
                <?= esc_html($phone['title']) ?>
            </h6>
            <a class="text-black d-flex flex-row justify-content-center align-items-center text-center gap-2"
               href="<?php echo esc_url($phone['number']); ?>">
                تماس تلفنی
                <i class="bi bi-chevron-left"></i>
            </a>
        </div>
        <!--    Email    -->
        <div class="col-6 col-lg-3 d-flex flex-column align-items-center justify-content-center gap-3 text-center">
            <?php get_template_part('template-parts/icons/mail');
            $mail = get_field('email', 'option');
            ?>
            <h6 class="text-black fs-3 fw-bold">
                <?= esc_html($mail['title']) ?>
            </h6>
            <a class="text-black d-flex flex-row justify-content-center align-items-center text-center gap-2"
               href="<?php echo esc_url($mail['url']); ?>">
                ارسال ایمیل
                <i class="bi bi-chevron-left"></i>
            </a>
    </div>
<!--        Counseling-->
        <div class="col-6 col-lg-3 d-flex flex-column align-items-center justify-content-center gap-3 text-center">
            <?php get_template_part('template-parts/icons/Counseling');
            $mail = get_field('Counseling', 'option');
            ?>
            <h6 class="text-black fs-3 fw-bold">
                <?= esc_html($mail['title']) ?>
                مشاوره
            </h6>
            <a class="text-black d-flex flex-row justify-content-center align-items-center text-center gap-2"
               href="<?php echo esc_url($mail['url']); ?>">
                مشاوره
                <i class="bi bi-chevron-left"></i>
            </a>
        </div>
</div>