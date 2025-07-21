<?php

function cjb_job_board_shortcode() {
    $args = [
        'post_type' => 'job_listing',
        'posts_per_page' => 10
    ];
    $jobs = new WP_Query($args);
    ob_start();

    if ( $jobs->have_posts() ) {
        echo '<div class="cjb-job-board">';
        while ( $jobs->have_posts() ) {
            $jobs->the_post();
            echo '<div class="cjb-job">';
            echo '<h3>' . get_the_title() . '</h3>';
            echo '<div>' . get_the_excerpt() . '</div>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo '<p>No job listings found.</p>';
    }

    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode( 'job_board', 'cjb_job_board_shortcode' );
