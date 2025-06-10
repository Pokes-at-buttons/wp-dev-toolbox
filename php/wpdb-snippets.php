<?php

global $wpdb;

// Select all
$results = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}users");

// Prepared statement (secure!)
$user_id = 5;
$results = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}users WHERE ID = %d", $user_id)
);

// Insert row
$wpdb->insert(
    "{$wpdb->prefix}my_table",
    [
        'name' => 'Tim',
        'status' => 'active',
    ]
);

// Update row
$wpdb->update(
    "{$wpdb->prefix}my_table",
    ['status' => 'inactive'],
    ['id' => 5]
);

// Delete row
$wpdb->delete(
    "{$wpdb->prefix}my_table",
    ['id' => 5]
);
