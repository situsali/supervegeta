<?php
/**
 * Super Vegeta functions and definitions
 *
 */

function supervegeta_theme_support() {
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-background',
	array(
	    'green' => 'primary',
	    'yellow' => 'warning',
	    'red' => 'danger',
	    'blue' => 'link'));

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

function supervegeta_register_styles() {
    wp_enqueue_style('bulma-style',
	get_template_directory_uri() . '/assets/css/bulma.css',
	array(), '0.9.0');

    wp_style_add_data('bulma-style','rtl','replace');
}

add_action( 'wp_enqueue_scripts', 'supervegeta_register_styles' );

