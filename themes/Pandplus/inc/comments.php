<?php

if (!function_exists('okcsComments')) {
    function okcsComments($comment, $args, $depth)
    {
        $GLOBALS['comment'] = $comment; ?>

        <li class="card no-translate background-blur rounded-1 p-3 my-2" id="comment-<?= comment_ID() ?>">
            <div class="row">
                <div class="col">
                    <span class="fw-light small mb-1">
                        <?= $GLOBALS['user_identity'] ?> <?= comment_date() ?>
                    </span>
                </div>
            </div>
            <?php if (!$comment->comment_approved) { ?>
                <p class="text-muted">دیدگاه شما در انتظار بررسی است.</p>
            <?php } ?>
            <div class="m-0">
                <?php sanitize_text_field(comment_text()) ?>
            </div>
            <div class="text-white">
                <?php comment_reply_link(array_merge($args, array(
                    'reply_text' => ' <i class="iconsax pe-2" icon-name="undo-square"></i>پاسخ ',
                    'depth' => $depth,
                    'max_depth' => $args['max_depth']
                ))); ?>
            </div>
        </li>

    <?php }
}

if (!function_exists('custom_comment_reply_link')) {
    function custom_comment_reply_link($class)
    {
        return str_replace('comment-reply-link', 'background-blur text-white p-1 ', $class);
    }

    add_action('comment_reply_link', 'custom_comment_reply_link');
}