<?php
/*
Plugin Name: WP Quick Job Board
Description: Adds a simple job board with listings and an application form.
Version: 1.0
Author: Your Name
*/

defined('ABSPATH') or die('No script kiddies please.');

require plugin_dir_path(__FILE__) . 'includes/job-board-functions.php';

register_activation_hook( __FILE__, 'qjb_create_table' );

add_action('init', 'qjb_register_cpt');
add_shortcode('quick_job_listings', 'qjb_job_listings_shortcode');
add_action('wp_enqueue_scripts', 'qjb_enqueue_styles');
add_action('init', 'qjb_handle_job_application');
?>
