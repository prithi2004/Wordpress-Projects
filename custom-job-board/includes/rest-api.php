<?php

add_action( 'rest_api_init', function () {
    register_rest_route( 'cjb/v1', '/jobs', [
        'methods' => 'GET',
        'callback' => 'cjb_get_jobs',
    ]);
});

function cjb_get_jobs() {
    $jobs = new WP_Query([
        'post_type' => 'job_listing',
        'posts_per_page' => -1
    ]);

    $data = [];

    while ( $jobs->have_posts() ) {
        $jobs->the_post();
        $data[] = [
            'id' => get_the_ID(),
            'title' => get_the_title(),
            'content' => get_the_content(),
        ];
    }

    wp_reset_postdata();
    return $data;
}
