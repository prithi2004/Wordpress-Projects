<?php

function cjb_register_job_post_type() {
    register_post_type( 'job_listing', [
        'labels' => [
            'name' => 'Jobs',
            'singular_name' => 'Job',
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'custom-fields'],
        'rewrite' => ['slug' => 'jobs'],
        'show_in_rest' => true,
    ]);
}
add_action( 'init', 'cjb_register_job_post_type' );
