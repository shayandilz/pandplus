<?php


function portfolio_post_types()
{
    //    Projects post type
    register_post_type('portfolio', array(
        'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail' ),
        'rewrite' => array('slug' => 'portfolio'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'نمونه کار',
            'add_new' => 'افزودن نمونه کار',
            'add_new_item' => 'افزودن نمونه کار',
            'edit_item' => 'ویرایش نمونه کار',
            'all_items' => 'همه ی نمونه کار ها',
            'singular_name' => 'نمونه کار ها'
        ),
        'menu_icon' => 'dashicons-portfolio'
    ));
    register_taxonomy(
        'portfolio_categories',
        'portfolio',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'دسته بندی نمونه کار', // display name
            'query_var' => true,
        )
    );
    // game post-type
    register_post_type('games', array(
        'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail' ),
        'rewrite' => array('slug' => 'games'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'بازی',
            'add_new' => 'افزودن بازی',
            'add_new_item' => 'افزودن بازی',
            'edit_item' => 'ویرایش بازی',
            'all_items' => 'همه ی بازی ها',
            'singular_name' => 'بازی ها'
        ),
        'menu_icon' => 'dashicons-portfolio'
    ));
    register_taxonomy(
        'game_categories',
        'game',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'دسته بندی بازی', // display name
            'query_var' => true,
        )
    );
    // services post-type
    register_post_type(' 
    ', array(
        'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail' ),
        'rewrite' => array('slug' => 'services'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'سرویس ها',
            'add_new' => 'افزودن سرویس',
            'add_new_item' => 'افزودن سرویس جدید',
            'edit_item' => 'ویرایش سرویس',
            'all_items' => 'همه ی سرویس ها',
            'singular_name' => 'سرویس'
        ),
        'menu_icon' => 'dashicons-excerpt-view'
    ));
    register_taxonomy(
        'services_categories',
        'services',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'دسته بندی سرویس ها', // display name
            'query_var' => true,
        )
    );
    $labels = array(
        'name' => _x( 'Tags', 'taxonomy general name' ),
        'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Tags' ),
        'popular_items' => __( 'Popular Tags' ),
        'all_items' => __( 'All Tags' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Tag' ),
        'update_item' => __( 'Update Tag' ),
        'add_new_item' => __( 'Add New Tag' ),
        'new_item_name' => __( 'New Tag Name' ),
        'separate_items_with_commas' => __( 'Separate tags with commas' ),
        'add_or_remove_items' => __( 'Add or remove tags' ),
        'choose_from_most_used' => __( 'Choose from the most used tags' ),
        'menu_name' => __( 'Tags' ),
    );

    register_taxonomy('service_tag','services',array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'tag-services' ),
    ));
}

add_action('init', 'portfolio_post_types');