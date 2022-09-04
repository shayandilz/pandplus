<?php




function at_rest_testing_endpoint()
{
    $mainQuery = new WP_Query();

    $mainResults = array(
        'instagram_posts' => array(),

    );

    return $mainResults;
}




function at_rest_init()
{
    $namespace = 'api/v1';
    $route     = 'instagram';

    register_rest_route($namespace, $route, array(
        'methods' => WP_REST_Server::READABLE,
        'callback' => 'at_rest_testing_endpoint'
    ));


}


add_action('rest_api_init', 'at_rest_init');