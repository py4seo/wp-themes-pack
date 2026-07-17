<?php
function fotografie_child_theme_scripts() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'fotografie_child_theme_scripts' );