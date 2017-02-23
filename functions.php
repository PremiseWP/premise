<?php
/**
 * Functions
 *
 * @package Premise Theme
 */

add_action( 'wp_enqueue_scripts', 'simplicity_child_styles', 20 );

function simplicity_child_styles() {
	wp_enqueue_style( 'simplicity_child_css', get_stylesheet_directory_uri() . '/css/style.min.css' );
	wp_enqueue_script( 'simplicity_child_js', get_stylesheet_directory_uri() . '/js/script.min.js' );
}