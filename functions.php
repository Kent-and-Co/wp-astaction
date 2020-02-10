<?php

// add main style
function ast_load_main_style() {
	wp_enqueue_style( 'ast-main-style', get_stylesheet_uri() );
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'ast_load_main_style' );

// add viewport
function add_viewport_meta_tag() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
}
add_action( 'wp_head', 'add_viewport_meta_tag', '1' );

// add title tag
add_theme_support( 'title-tag' );
