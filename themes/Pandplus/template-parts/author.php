<?php $user_array_img = get_field('profile_image', 'user_' . $post->post_author);
if ($user_array_img){ ?>
    <img width="32px" height="32px" src="<?php echo $user_array_img['url'] ?>"
         alt="<?php echo $user_array_img['alt'] ?>">
<?php }else{ ?>
    <img width="32px" height="32px" src="<?php echo esc_url(site_url('/wp-content/uploads/2022/06/logo-avatar.png')); ?>"
         alt="<?php the_title(); ?>">
<?php }?>