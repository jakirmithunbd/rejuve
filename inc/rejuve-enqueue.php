<?php 
function rejuve_scripts()
{
    wp_enqueue_style('rejuve-style', get_stylesheet_uri(), array(), '1.0.0');

    wp_enqueue_style('rejuve-slick', get_template_directory_uri() . '/assets/css/slick.min.css', array(), time(), false);
    wp_enqueue_style('rejuve-main-style', get_template_directory_uri() . '/assets/css/rejuve-style.css', array(), time(), false);


    wp_enqueue_script('rejuve-slick-scripts', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('rejuve-scripts', get_template_directory_uri() . '/assets/js/rejuve-scripts.js', array('jquery', 'wp-util'), time(), true);
    

    $data = array(
        'site_url' => get_template_directory_uri(),
        'preloader' => '/wp-content/themes/rejuve/assets/images/ajax-loader.gif',
        'admin_ajax'   => admin_url('admin-ajax.php'),
    );
    wp_localize_script('rejuve-scripts', 'ajax', $data);


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'rejuve_scripts');