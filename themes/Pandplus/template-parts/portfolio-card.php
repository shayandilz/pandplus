<article>
    <a href="<?php the_permalink(); ?>" class="card mb-2 border-0 lazy rounded-1 services" tabindex="-1">
        <?php $users = get_field("team_member");
        if ($users): ?>
            <ul class="overlay-top position-absolute top-0 w-100 list-unstyled gap-1 p-2">
                <?php foreach ($users as $user):
                    $user_array_img = get_field('profile_image', 'user_' . $user['ID']); ?>
                    <li  class=" d-inline-block">
                        <img data-bs-toggle="tooltip" data-bs-placement="top" width="45px" height="45px"
                             title="<?php echo $user['display_name']; ?>" class="object-fit rounded-circle d-block"
                             src="<?php echo $user_array_img['url'] ?>" alt="<?php echo $user_array_img['alt'] ?>">
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="ratio lazy ratio-4x3 overflow-hidden rounded-1">
            <img class="object-fit" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        </div>
        <div class="overlay-bottom background-blur p-3 rounded-1 position-absolute z-top">
            <h6 class="my-2">
            <span class="link-white lazy">
                <?php the_title(); ?>
            </span>
            </h6>
        </div>
    </a>
</article>
