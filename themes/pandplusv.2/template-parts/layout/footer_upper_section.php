<div class="row justify-content-center">
    <div class="d-flex col-11 col-lg-7 position-absolute translate-middle-y cta-footer image-rounded p-4 shadow-sm z-top">
        <!--    Whatsapp    -->
        <div data-animate="3" class="col-5 col-lg-3 d-flex flex-column align-items-center justify-content-center gap-3 text-center gs_reveal gs_reveal_fromTop">
            <?php get_template_part('template-parts/icons/whatsapp');
            $whatsapp = get_field('whatsapp', 'option');
            ?>
            <h6 class="text-black fs-4 fw-bold">
                <?= esc_html($whatsapp['title']) ?>
            </h6>
            <a class="text-black d-flex flex-row justify-content-center align-items-center text-center gap-2"
               href="<?php echo esc_url($whatsapp['number']); ?>">
                چت واتساپ
                <i class="bi bi-chevron-left"></i>
            </a>
        </div>
        <!--    Phone    -->
        <div data-animate="6" class="col-5 col-lg-3 d-flex flex-column align-items-center justify-content-center gap-3 text-center gs_reveal gs_reveal_fromTop">
            <?php get_template_part('template-parts/icons/phone');
            $phone = get_field('phone', 'option');
            ?>
            <h6 class="text-black fs-4 fw-bold">
                <?= esc_html($phone['title']) ?>
            </h6>
            <a class="text-black d-flex flex-row justify-content-center align-items-center text-center gap-2"
               href="tel:<?= get_field('call_number_service', 'option'); ?>">
                تماس تلفنی
                <i class="bi bi-chevron-left"></i>
            </a>
        </div>
        <!--    Email    -->
        <div data-animate="9" class="col-5 col-lg-3 d-flex flex-column align-items-center justify-content-center gap-3 text-center gs_reveal gs_reveal_fromTop">
            <?php get_template_part('template-parts/icons/mail');
            $mail = get_field('email', 'option');
            ?>
            <h6 class="text-black fs-4 fw-bold">
                <?= esc_html($mail['title']) ?>
            </h6>
            <a class="text-black d-flex flex-row justify-content-center align-items-center text-center gap-2"
               href="mailto:<?php echo esc_url($mail['url']); ?>">
                ارسال ایمیل
                <i class="bi bi-chevron-left"></i>
            </a>
    </div>
<!--        Counseling-->
        <div data-animate="12" class="col-5 col-lg-3 d-flex flex-column align-items-center justify-content-center gap-3 text-center gs_reveal gs_reveal_fromTop">
            <?php get_template_part('template-parts/icons/Counseling');
            $mail = get_field('Counseling', 'option');
            ?>
            <h6 class="text-black fs-4 fw-bold">
                مشاوره
            </h6>
            <a rel="nofollow" type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    class="text-black d-flex flex-row justify-content-center align-items-center text-center gap-2">
                مشاوره
                <i class="bi bi-chevron-left"></i>
            </a>
        </div>
</div>