<?php get_header();?>

<section class="position-relative overflow-hidden">
    <span class="position-absolute top-50 start-0 d-none d-lg-inline">
        <?php get_template_part('template-parts/lines/ver-hor-line-big-right');?>
    </span>
<div class="container mt-lg-5 py-5 ">
    <div class="row justify-content-center vh-65">
        <div class="col-12 col-lg-7 order-2 order-lg-1">
            <!-- tag list        -->
            <div class="d-flex gap-3">
                <?php  get_template_part('template-parts/blogpage/tag'); ?>
            </div>
            <!--  date-->
            <p class=" my-3">
                <?php  get_template_part('template-parts/icons/clock');?>
                <span>۱۴۰۰ بهمن ۲۲</span>
            </p>
            <!--            category-->
            <h5 class="fw-bold">  طراحی و توسعه وبسایت</h5>
            <!--            title-->
            <h2 class="my-4"><?php the_title(); ?></h2>
            <!--            excerpt-->
            <p class="py-3 text-justify"><?php echo get_the_excerpt();?></p>
            <!--            author info-->
            <div class="d-flex gap-3 align-items-center">
                <?php $user_array_img = get_field('profile_image', 'user_' . $post->post_author);
                if ($user_array_img) { ?>
                    <img class="rounded-circle" width="42px" height="42px" src="<?php echo $user_array_img['url'] ?>"
                         alt="<?php echo $user_array_img['alt'] ?>">
                <?php } else { ?>
                    <img class="rounded-circle" width="42px" height="42px"
                         src="<?php echo esc_url(site_url('/wp-content/uploads/2022/06/logo-avatar.png')); ?>"
                         alt="<?php the_title(); ?>">
                <?php } ?>
                <div>
                    <div>
                        <!--                        author name-->
                        ارسال توسط
                        <span class="fw-normal text-primary">
                        <?php echo get_the_author_meta('display_name', $post->post_author); ?>
                        </span>
                    </div>
                    <div>
                        <!--                        date-->
                        <?php echo get_the_date('d  F , Y'); ?>
                        <!--                        reading time-->
                        <span class="px-2">
                        ∙  3 دقیقه مطالعه کنید
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 order-1 order-lg-2 mb-3 mb-lg-0">
            <!--        post image-->
            <img class="w-100 h-100 image-rounded object-fit" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
        </div>
    </div>
    <div class="row justify-content-center mt-5">
<!--        main area-->
        <div class="col-12 col-lg-7 ">

<!--            table of content-->
            <div class="bg-success image-rounded p-5 mb-5">
                    <h3 class="py-3">آنچه در این مقاله می‌خوانید:</h3>
                    <div class="d-flex align-items-center">
                        <h6 class="display-2 fw-bold text-danger pe-3 opacity-25">1</h6>
                        <ul class="list-unstyled">
<!--                            headings-->
                            <li><span>
                                <?php get_template_part('template-parts/icons/bullet-list')?>
                            </span>
                                نمونه کارها که به خوبی فکر شده
                            </li>
                        </ul>
                    </div>
            </div>
<!--            content-->
<!--            <div class="text-justify px-1 px-lg-0">-->
<!--                --><?php //echo get_the_content(); ?>
<!--            </div>-->
            <!--                        first part of content-->
                    <p class="text-justify px-1 px-lg-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
<!--                            every 200 word-->
                        <div class="bg-success image-rounded p-3 my-5">
                            <div class="d-md-flex gap-3 align-items-center text-center text-md-start">
                                <img class="col-12 col-lg-2 image-rounded-min object-fit" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                                <div class="col-12 col-lg-7 mt-2 mt-md-0">
                                    <div class="d-flex align-items-center gap-3 justify-content-center justify-content-md-start">
                                        <p class="fw-bold m-0">  طراحی و توسعه وبسایت</p>
                                        <hr class="vr">
                                        <span><?php echo get_template_part('template-parts/icons/services/clock');?></span> <?php echo get_the_date('d  F , Y'); ?>
                                    </div>
                                    <h6 class="my-2 fs-4"><?php the_title(); ?></h6>
                                </div>
                                <a class="text-danger fw-bolder" href=""> ادامه مطلب ></a>
                            </div>
                        </div>
<!--                             every 500 word-->
                        <div class="bg-success image-rounded p-5 my-5 ms-5 ms-lg-0 position-relative">
                            <span class="bg-success rounded-circle border border-5 p-4 border-white position-absolute start-0 top-50 translate-middle">
                                <?php get_template_part('template-parts/icons/quote-up');?>
                            </span>
                            <h4>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h4>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>

                        </div>
<!--                        second part of content-->
                    <p class="text-justify px-1 px-lg-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
<!--            end content-->
<!--            cta-->
                <?php get_template_part('template-parts/cta');?>
<!--            more post-->
                 <?php get_template_part('template-parts/blogpage/more-posts');?>


        </div>
<!--    sidebar area-->
        <div class="col-12 col-lg-4">
            <?php get_template_part('template-parts/sidebar');?>
        </div>
    </div>

</div>
</section>

<?php get_footer();?>