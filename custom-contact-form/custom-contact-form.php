<?php
/**
 * Plugin Name: Custom Contact Form
 * Description: A simple WordPress contact form plugin using a shortcode.
 * Version: 1.0
 * Author: Your Name
 */

defined('ABSPATH') || exit;

function ccf_display_form() {
    ob_start(); ?>
    <form method="post" action="">
        <p><input type="text" name="ccf_name" placeholder="Your Name" required></p>
        <p><input type="email" name="ccf_email" placeholder="Your Email" required></p>
        <p><textarea name="ccf_message" placeholder="Your Message" required></textarea></p>
        <p><input type="submit" name="ccf_submit" value="Send"></p>
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_contact_form', 'ccf_display_form');

function ccf_handle_submission() {
    if (isset($_POST['ccf_submit'])) {
        $name = sanitize_text_field($_POST['ccf_name']);
        $email = sanitize_email($_POST['ccf_email']);
        $message = sanitize_textarea_field($_POST['ccf_message']);
        wp_mail(get_option('admin_email'), 'New Contact Form Message', 
            "Name: $name
Email: $email
Message:
$message");
    }
}
add_action('init', 'ccf_handle_submission');
