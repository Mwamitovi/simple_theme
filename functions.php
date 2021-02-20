<?php

function simple_theme_setup() {
	// featured image support
	add_theme_support( 'post-thumbnails' );

	// register navigation menu location for a theme
	register_nav_menus(
		array( 'primary' => __( 'Primary Menu' ))
	);
}

/**
 * add_action:
 * Used to add something or create something
 */
add_action( 'after_setup_theme', 'simple_theme_setup' );

// Excerpt length
function set_excerpt_length() {
	return 35;
}

/**
 * add_filter:
 * Used to change something
 */
add_filter( 'excerpt_length', 'set_excerpt_length' );
