<?php
/* Template Name: Contact Page */

get_header();

?>

    <section class="position-relative z-top">
        <div class="w-100 bg-shadow position-relative">
            <?php the_field('iframe_google', 'option'); ?>
        </div>
        <div class="container">
            <div class="row default-margin-top gap-3 justify-content-center align-items-center">
                <?php if (have_rows('contact_address', 'option')): ?>
                    <div class="col-12 col-lg-3 d-flex justify-content-center align-items-center flex-column text-center">
                        <?php while (have_rows('contact_address', 'option')): the_row();
                            $contact_svg = get_sub_field('contact_svg');
                            $address = get_sub_field('address');
                            $contact_link = get_sub_field('contact_link');
                            ?>
                            <span class="background-radial p-4 rounded-1 mb-3">
                                <i class="iconsax" icon-name="<?php echo $contact_svg ?>"></i>
                            </span>
                            <h5 class="text-white">آدرس</h5>
                            <p class="text-white-50">
                                <?php echo $address; ?>
                            </p>
                            <a href="<?php echo esc_url($contact_link['url']) ?>" class="text-white">
                                <?php echo esc_attr($contact_link['title']); ?>
                                <i class="iconsax" icon-name="arrow-left"></i>
                            </a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if (have_rows('contact_email', 'option')): ?>
                    <div class="col-12 col-lg-3 d-flex justify-content-center align-items-center flex-column text-center">
                        <?php while (have_rows('contact_email', 'option')): the_row();
                            $contact_svg = get_sub_field('contact_svg');
                            $address = get_sub_field('address');
                            $contact_link = get_sub_field('contact_link');
                            ?>
                            <span class="background-radial p-4 rounded-1 mb-3">
                                <i class="iconsax" icon-name="<?php echo $contact_svg ?>"></i>
                            </span>
                            <h5 class="text-white">ایمیل</h5>
                            <p class="text-white-50">
                                <?php echo $address; ?>
                            </p>
                            <a href="<?php echo esc_attr($contact_link['url']) ?>" class="text-white">
                                <?php echo esc_attr($contact_link['title']); ?>
                                <i class="iconsax" icon-name="arrow-left"></i>
                            </a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if (have_rows('contact_phone', 'option')): ?>
                    <div class="col-12 col-lg-3 d-flex justify-content-center align-items-center flex-column text-center">
                        <?php while (have_rows('contact_phone', 'option')): the_row();
                            $contact_svg = get_sub_field('contact_svg');
                            $address = get_sub_field('address');
                            $contact_link = get_sub_field('contact_link');
                            ?>
                            <span class="background-radial p-4 rounded-1 mb-3">
                                <i class="iconsax" icon-name="<?php echo $contact_svg ?>"></i>
                            </span>
                            <h5 class="text-white">شماره تماس</h5>
                            <p class="text-white-50">
                                <?php echo $address; ?>
                            </p>
                            <a href="<?php echo esc_attr($contact_link['url']) ?>" class="text-white">
                                <?php echo esc_attr($contact_link['title']); ?>
                                <i class="iconsax" icon-name="arrow-left"></i>
                            </a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row text-white default-margin-top align-items-start">
                <div class="col-lg-6 col-12">
                    <h4>
                        پندپلاس اینجاست!
                    </h4>
                    <?php
                    $contact_text = get_field('contact_text', 'option');
                    if ($contact_text) : ?>
                        <?php the_field('contact_text', 'option'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6 col-12">
                    <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]') ?>
                </div>
            </div>
        </div>

    </section>

<?php
get_footer();