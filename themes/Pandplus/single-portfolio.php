<?php
/* Template Name: single portfolio */

get_header();

?>

    <main class="container-fluid container-lg z-top position-relative default-margin-top min-vh-100">
        <section class="row mx-1 justify-content-lg-start justify-content-center align-items-start">
            <div class="col-lg-10 col-8">
                <h1 class="py-2 text-white"><?php the_title(); ?></h1>
            </div>
            <?php
            $website_url = get_field('services_url');
            if ($website_url) :
                ?>
                <div class="col-lg-2 col-4 text-end">
                    <a class="background-radial rounded-1 text-white btn btn-gold"
                       href="<?= $website_url ?>">
                    <span class="d-md-inline">
                       آدرس وبسایت
                    </span>
                    </a>
                </div>
            <?php endif; ?>
            <?php $users = get_field("team_member");
            if ($users):

            ?>
            <div class="col-12 position-relative d-flex align-items-center">
                <span class="text-white">اجرا توسط</span>
                <ul class="list-unstyled mb-0 p-2 overlay-top no-hide">
                    <?php foreach ($users as $user):
                        $user_array_img = get_field('profile_image', 'user_' . $user['ID']); ?>
                        <li class="d-inline-block">
                            <a href="<?= get_author_posts_url( $user['ID'] ) ?>">
                                <img data-bs-toggle="tooltip" data-bs-placement="top" width="45px" height="45px"
                                     title="<?php echo $user['display_name']; ?>"
                                     class="object-fit rounded-circle d-block"
                                     src="<?php echo $user_array_img['url'] ?>"
                                     alt="<?php echo $user_array_img['alt'] ?>">
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                <span class="text-white">
                    <?php echo get_the_date('F , Y'); ?>
                </span>
            </div>

            <div class="row mt-5 text-white justify-content-center background-blur py-2 px-2 rounded-1">
                <div class="col-lg-8 col-12">
                    <h5 class="mb-1">چکیده</h5>
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
                <div class="col-lg-2 col-12">
                    <h5 class="mb-1">خدمات انجام شده</h5>
                    <?php
                    $service_done = get_field('services_done');
                    if ($service_done): ?>
                        <ul class="list-unstyled text-start">
                            <?php foreach ($service_done as $services): ?>
                                <li class="py-2"><?php echo $services; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="col-lg-2 col-12">
                    <h5 class="mb-1">مشتری</h5>
                    <p><?php the_field('client'); ?></p>
                </div>
                <?php
                $images = get_field('service_gallery');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($images):?>
                    <div class="col-12 row g-2 g-lg-3">
                        <?php foreach ($images as $image): ?>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card rounded-1 overflow-hidden my-0 my-lg-1 no-translate position-relative">
                                    <div class="ratio lazy ratio-4x3">
                                        <img class="object-fit lazy"
                                             src="<?php echo esc_url($image['url']); ?>"
                                             alt="<?php the_title(); ?>">
                                    </div>
                                    <a href="#playerModal"
                                       data-url="<?php echo esc_url($image['url']); ?>"
                                       data-title="<?php the_title(); ?>"
                                       data-bs-toggle="modal"
                                       class="play-btn position-absolute top-0 start-0 w-100 h-100"
                                       style=""
                                    >
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>

    </main>


    <!-- player Modal -->
    <div class="modal fade" id="playerModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="playerLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content rounded-1 overflow-hidden background-blur-insta">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="w-100 h-50" id="modalPlayerVideo">
                        <img class="img-fluid"
                             src=""
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();