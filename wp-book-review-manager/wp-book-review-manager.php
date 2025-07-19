<?php
/*
Plugin Name: WP Book Review Manager
Description: A custom plugin to manage and display book reviews using a shortcode.
Version: 1.0
Author: prithi2004
*/

// Register Custom Post Type
function brm_register_book_review_cpt() {
    $args = array(
        'labels' => array(
            'name' => 'Book Reviews',
            'singular_name' => 'Book Review',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'custom-fields'),
    );
    register_post_type('book_review', $args);
}
add_action('init', 'brm_register_book_review_cpt');

// Shortcode to display book reviews
function brm_display_book_reviews() {
    $query = new WP_Query(array(
        'post_type' => 'book_review',
        'posts_per_page' => -1,
    ));

    $output = '<div class="book-reviews">';
    while ($query->have_posts()) : $query->the_post();
        $rating = get_post_meta(get_the_ID(), 'rating', true);
        $output .= '<div class="review">';
        $output .= '<h3>' . get_the_title() . '</h3>';
        $output .= '<p>' . get_the_content() . '</p>';
        $output .= '<strong>Rating: ' . esc_html($rating) . '/5</strong>';
        $output .= '</div>';
    endwhile;
    wp_reset_postdata();
    $output .= '</div>';

    return $output;
}
add_shortcode('book_reviews', 'brm_display_book_reviews');

// Add meta box for rating
function brm_add_rating_meta_box() {
    add_meta_box('brm_rating', 'Book Rating (1-5)', 'brm_rating_callback', 'book_review');
}
add_action('add_meta_boxes', 'brm_add_rating_meta_box');

function brm_rating_callback($post) {
    $rating = get_post_meta($post->ID, 'rating', true);
    echo '<input type="number" name="brm_rating" min="1" max="5" value="' . esc_attr($rating) . '" />';
}

function brm_save_rating_meta_box($post_id) {
    if (array_key_exists('brm_rating', $_POST)) {
        update_post_meta($post_id, 'rating', sanitize_text_field($_POST['brm_rating']));
    }
}
add_action('save_post', 'brm_save_rating_meta_box');
?>
