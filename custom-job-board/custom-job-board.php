<?php
/**
 * Plugin Name: Custom Job Board
 * Description: A simple job board plugin with custom post type, shortcode, and REST API.
 * Version: 1.0
 * Author: Your Name
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'CJB_PATH', plugin_dir_path( __FILE__ ) );

require_once CJB_PATH . 'includes/post-type.php';
require_once CJB_PATH . 'includes/shortcode.php';
require_once CJB_PATH . 'includes/rest-api.php';

// Enqueue CSS
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'cjb-style', plugin_dir_url(__FILE__) . 'css/style.css' );
});
