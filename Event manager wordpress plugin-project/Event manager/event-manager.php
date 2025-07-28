
<?php
/*
Plugin Name: Event Manager
Description: A simple custom event management plugin for WordPress.
Version: 1.0
Author: Your Name
*/

// Register custom post type for Events
function em_register_event_post_type() {
    $labels = array(
        'name' => 'Events',
        'singular_name' => 'Event',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event',
        'new_item' => 'New Event',
        'view_item' => 'View Event',
        'search_items' => 'Search Events',
        'not_found' => 'No events found',
        'not_found_in_trash' => 'No events found in Trash',
        'menu_name' => 'Events'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'events'),
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'menu_icon' => 'dashicons-calendar'
    );

    register_post_type('event', $args);
}
add_action('init', 'em_register_event_post_type');

// Shortcode to display events
function em_display_events_shortcode() {
    $args = array(
        'post_type' => 'event',
        'posts_per_page' => 5
    );
    $query = new WP_Query($args);
    $output = '<div class="event-list">';
    while ($query->have_posts()) {
        $query->the_post();
        $output .= '<div class="event-item">';
        $output .= '<h3>' . get_the_title() . '</h3>';
        $output .= '<div>' . get_the_excerpt() . '</div>';
        $output .= '</div>';
    }
    wp_reset_postdata();
    $output .= '</div>';
    return $output;
}
add_shortcode('event_list', 'em_display_events_shortcode');
?>
