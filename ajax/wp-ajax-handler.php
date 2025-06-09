<?php
// === /ajax/wp-ajax-handler.php ===

/**
 * WordPress AJAX handler example (functions.php or plugin file)
 */
add_action('wp_ajax_log_cat_feed', 'handle_log_cat_feed');
add_action('wp_ajax_nopriv_log_cat_feed', 'handle_log_cat_feed');

function handle_log_cat_feed() {
    // Basic sanitisation
    $cat_id = isset($_POST['cat_id']) ? intval($_POST['cat_id']) : 0;
    $time   = isset($_POST['time']) ? sanitize_text_field($_POST['time']) : '';

    // Your logic here (e.g., log to DB, validate user)
    if ($cat_id && $time) {
        // Example: write to log file (for demo)
        error_log("Cat {$cat_id} fed at {$time}");

        wp_send_json_success(['message' => 'Cat feeding logged successfully.']);
    } else {
        wp_send_json_error(['message' => 'Missing or invalid data.']);
    }

    wp_die();
}
