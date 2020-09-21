<?php

function getInstagramFeeds($args){
    $count = $args['count'];
    $instadata = instagram_get_user_items(array('limit'=>$count));

    return $instadata;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'instagramapi/v1', '/instafeed/(?P<count>\d+)', array(
        'methods' => 'GET',
        'callback' => 'getInstagramFeeds',
    ) );
} );