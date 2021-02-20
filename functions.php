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


// Widget locations
function init_widgets($id) {

	// build a definition for a single sidebar and returns ID
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' 	 => 'sidebar',
		'before_widget' => '<div class="side-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
}

add_action( 'widgets_init', 'init_widgets' );
