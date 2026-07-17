<?php
function fotografie_child_theme_scripts() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'fotografie_child_theme_scripts' );

function custom_login_error_message() {
    return 'Access Denied';
}
add_filter('login_errors', 'custom_login_error_message');

add_action('login_enqueue_scripts', function() {
    echo '<style>.login h1 a { pointer-events: none; }</style>';
});

add_action('login_enqueue_scripts', function() {
    echo '<style>.login #nav { display: none; }</style>';
});
