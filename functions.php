<?php

// Function to include the rejuve-general-settings.php file
function include_rejuve_general_settings() {
    require_once 'inc/rejuve-enqueue.php';
    require_once 'inc/rejuve-general-settings.php';
}

// Hook the function to the after_setup_theme action
add_action('after_setup_theme', 'include_rejuve_general_settings');

// Undefined array key "width" "height" 
add_filter('woocommerce_resize_images', static function() {
    return false;
});

