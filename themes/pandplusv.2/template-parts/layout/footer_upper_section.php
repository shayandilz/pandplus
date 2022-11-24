<div class="row align-items-center justify-content-center text-center flex-column g-4 pb-5">
    <div class="col-12 col-lg-6 d-flex flex-column gap-4">
            <span>
            <?= get_field('small_footer_heading', 'option') ?>
        </span>
        <h3 class="fw-bolder text-black">
            <?= get_field('main_footer_heading', 'option') ?>
        </h3>
        <p>
            <?= get_field('footer_text', 'option') ?>
        </p>

    </div>
    <?php
    $footer_button = get_field('footer_button','option');
    if ($footer_button): ?>
        <a href="<?php echo esc_url( $footer_button['link'] ); ?>" class="gradient btn text-white px-5 py-3 fs-5 rounded-1 w-auto">
            <?php echo esc_html( $footer_button['text'] ); ?>
        </a>
    <?php endif; ?>
</div>
<div class="row justify-content-center align-items-center py-5">
    <div class="col-12 col-lg-10">
        <div class="row justify-content-center align-items-center flex-row-reverse">
            <!--    Whatsapp    -->
            <div class="col d-flex flex-column align-items-center justify-content-center gap-3 text-center">
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
            <div class="col d-flex flex-column align-items-center justify-content-center gap-3 text-center">
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
            <div class="col d-flex flex-column align-items-center justify-content-center gap-3 text-center">
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
        </div>
    </div>
</div>