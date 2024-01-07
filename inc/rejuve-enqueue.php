<?php
function rejuve_scripts() {
    wp_enqueue_style( 'rejuve-style', get_stylesheet_uri(), [], '1.0.0' );

    wp_enqueue_style( 'rejuve-slick', get_template_directory_uri() . '/assets/css/slick.min.css', [], time(), false );
    wp_enqueue_style( 'rejuve-main-style', get_template_directory_uri() . '/assets/css/rejuve-style.css', [], time(), false );

    wp_enqueue_script( 'rejuve-slick-scripts', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery'], '1.0.0', true );
    wp_enqueue_script( 'rejuve-scripts', get_template_directory_uri() . '/assets/js/rejuve-scripts.js', ['jquery', 'wp-util'], time(), true );

    $data = [
        'site_url'   => get_template_directory_uri(),
        'preloader'  => '/wp-content/themes/rejuve/assets/images/ajax-loader.gif',
        'admin_ajax' => admin_url( 'admin-ajax.php' ),
        'nonce'      => wp_create_nonce(),
    ];
    wp_localize_script( 'rejuve-scripts', 'ajax', $data );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'rejuve_scripts' );