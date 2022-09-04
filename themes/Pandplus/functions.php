<?php
/**
 * Enqueue scripts and styles.
 */

function amaco_scripts()
{

    //    <!-- Icons -->
    wp_enqueue_style('font', get_template_directory_uri() . '/public/fonts/Kalameh/fontface.css', array() );
    wp_enqueue_style('style-extra', get_stylesheet_directory_uri() . '/public/css/extra-style.css', array() );
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/public/css/rtl-style.css', array() );
    wp_enqueue_script('main-js', get_template_directory_uri() . '/public/js/app.js', false, array(), false, true);



}

add_action('wp_enqueue_scripts', 'amaco_scripts');
add_theme_support('title-tag');
add_theme_support( 'post-thumbnails' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

add_role(
    'pand_member', //  System name of the role.
    __( 'Pandplus Team'  ), // Display name of the role.
    array(
        'read'  => false,
        'delete_posts'  => false,
        'delete_published_posts' => false,
        'edit_posts'   => false,
        'publish_posts' => false,
        'upload_files'  => false,
        'edit_pages'  => false,
        'edit_published_pages'  =>  false,
        'publish_pages'  => false,
        'edit_users' => true,
        'delete_published_pages' => true, // This user will NOT be able to  delete published pages.
    )
);

/** remove editor dashboard menu
 */ define( 'DISALLOW_FILE_EDIT', true);

function remove_menus(){

    remove_menu_page( 'index.php' );                  //Dashboard
    remove_menu_page( 'jetpack' );                    //Jetpack*   //
    remove_menu_page( 'edit.php' );                   //Posts
    remove_menu_page( 'upload.php' );                 //Media
    remove_menu_page( 'edit.php?post_type=page' );    //Pages
    remove_menu_page( 'edit-comments.php' );          //Comments
    remove_menu_page( 'themes.php' );                 //Appearance
    remove_menu_page( 'plugins.php' );                //Plugins
    remove_menu_page( 'users.php' );                  //Users
    remove_menu_page( 'tools.php' );                  //Tools
    remove_menu_page( 'options-general.php' );        //Settings
    remove_menu_page( 'portfolio' );
    remove_menu_page( 'services' );

}

if ( current_user_can( 'pand_member' ) ){
    add_action( 'admin_menu', 'remove_menus' );
}

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

add_filter( 'gform_confirmation_anchor', '__return_false' );
function my_wp_nav_menu_objects( $items, $args ) {
    // loop
    foreach( $items as &$item ) {
        // vars
        $icon = get_field('svg_menu', $item);
        // append icon
        if( $icon ) {
            $item->title .= $icon;
        }
    }

    // return
    return $items;
}
function baloochy_setup()
{
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
    register_nav_menu('headerMenuLocation', 'منوی اصلی');
    register_nav_menu('footerLocationOne', 'منوی فوتر');
}
add_action('after_setup_theme', 'baloochy_setup');
/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'تنظیمات پوسته',
        'menu_title' => 'تنظیمات پوسته',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}
//get post views
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function add_menu_link_class($classes, $item, $args)
{
    if (isset($args->link_class)) {
        $classes['class'] = $args->link_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

require get_template_directory() . '/inc/comments.php';

/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
// helper function to find a menu item in an array of items
function wpd_get_menu_item($field, $object_id, $items)
{
    foreach ($items as $item) {
        if ($item->$field == $object_id) return $item;
    }
    return false;
}


/**
 * Disable the emoji's
 */
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
    add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param array $plugins
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
    if ( 'dns-prefetch' == $relation_type ) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

        $urls = array_diff( $urls, array( $emoji_svg_url ) );
    }

    return $urls;
}


add_filter( 'is_xml_preprocess_enabled', 'wpai_is_xml_preprocess_enabled', 10, 1 );
function wpai_is_xml_preprocess_enabled( $is_enabled ) {
    return false;
}


//---- Get like or dislike count
function ip_get_like_count($type = 'likes') {
    $current_count = get_post_meta(get_the_id(), $type, true);

    return ($current_count ? $current_count : 0);
}

//---- Process like or dislike
function ip_process_like() {
    $processed_like = false;
    $redirect       = false;

    // Check if like or dislike
    if(is_singular('post')) {
        if(isset($_GET['post_action'])) {
            if($_GET['post_action'] == 'like') {
                // Like
                $like_count = get_post_meta(get_the_id(), 'likes', true);

                if($like_count) {
                    $like_count = $like_count + 1;
                }else {
                    $like_count = 1;
                }

                $processed_like = update_post_meta(get_the_id(), 'likes', $like_count);
            }elseif($_GET['post_action'] == 'dislike') {
                // Dislike
                $dislike_count = get_post_meta(get_the_id(), 'dislikes', true);

                if($dislike_count) {
                    $dislike_count = $dislike_count + 1;
                }else {
                    $dislike_count = 1;
                }

                $processed_like = update_post_meta(get_the_id(), 'dislikes', $dislike_count);
            }

            if($processed_like) {
                $redirect = get_the_permalink();
            }
        }
    }
    // Redirect
    if($redirect) {
        wp_redirect($redirect);
        die;
    }
}

add_action('template_redirect', 'ip_process_like');

function gt_get_post_view()
{
    $count = get_post_meta(get_the_ID(), 'post_views_count', true);
    return "$count";
}
function gt_set_post_view()
{
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int)get_post_meta($post_id, $key, true);
    $count++;
    update_post_meta($post_id, $key, $count);
}

function gt_posts_column_views($columns)
{
    $columns['post_views'] = 'Views';
    return $columns;
}

function gt_posts_custom_column_views($column)
{
    if ($column === 'post_views') {
        echo gt_get_post_view();
    }
}

add_filter('manage_posts_columns', 'gt_posts_column_views');

add_action('manage_posts_custom_column', 'gt_posts_custom_column_views');


function my_pre_get_posts( $query ) {
    if ( ! is_admin() && $query->is_main_query() && !is_category()
    ) {
        $query->set( 'offset_start', 4 );
        $query->set( 'posts_per_page', 12 );
    }

    if ( $offset = $query->get( 'offset_start' ) ) {
        $per_page = absint( $query->get( 'posts_per_page' ) );
        $per_page = $per_page ? $per_page : max( 1, get_option( 'posts_per_page' ) );

        $paged = max( 1, get_query_var( 'paged' ) );
        $query->set( 'offset', ( $paged - 1 ) * $per_page + $offset );
    }
    if ( !is_admin() && $query->is_main_query() ) {
        if ($query->is_tag) {
            $query->set('post_type', array( 'post', ));
        }
    }
}
add_action( 'pre_get_posts', 'my_pre_get_posts' );

