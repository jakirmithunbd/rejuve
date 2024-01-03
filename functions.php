<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}

function rejuve_acf_json_save_point( $path ) {
    return get_stylesheet_directory() . '/acf-fields';
}
add_filter( 'acf/settings/save_json', 'rejuve_acf_json_save_point' );

function my_acf_json_load_point( $paths ) {
    // Remove the original path (optional).
    unset($paths[0]);

    // Append the new path and return it.
    $paths[] = get_stylesheet_directory() . '/acf-fields';

    return $paths;    
}
add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' );