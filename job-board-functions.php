<?php

function qjb_enqueue_styles() {
    wp_enqueue_style('qjb-style', plugin_dir_url(__FILE__) . '../templates/style.css');
}

function qjb_register_cpt() {
    register_post_type('job', [
        'labels' => ['name' => 'Jobs', 'singular_name' => 'Job'],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title','editor'],
    ]);
}

function qjb_create_table() {
    global $wpdb;
    $table = $wpdb->prefix . 'qjb_applications';
    $charset = $wpdb->get_charset_collate();
    $wpdb->query("CREATE TABLE IF NOT EXISTS $table (
        id mediumint not null auto_increment primary key,
        job_id bigint not null,
        applicant_name text not null,
        applicant_email text not null,
        applied_at datetime default current_timestamp
    ) $charset;");
}

function qjb_job_listings_shortcode() {
    $jobs = get_posts(['post_type' => 'job', 'numberposts' => -1]);
    ob_start();
    include plugin_dir_path(__FILE__) . '../templates/job-listing-template.php';
    return ob_get_clean();
}

function qjb_handle_job_application() {
    if (!empty($_POST['qjb_apply']) && !empty($_POST['job_id'])) {
        global $wpdb;
        $wpdb->insert($wpdb->prefix.'qjb_applications', [
            'job_id' => intval($_POST['job_id']),
            'applicant_name' => sanitize_text_field($_POST['applicant_name']),
            'applicant_email' => sanitize_email($_POST['applicant_email'])
        ]);
        wp_safe_redirect($_SERVER['HTTP_REFERER']);
        exit;
    }
}
?>
