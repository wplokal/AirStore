<?php
/**
 * 	add body class
 *	2020-11-25 09:22:30
 */
function cifor_theme_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'cifor_theme_body_classes' );