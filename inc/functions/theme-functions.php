<?php
/**
 * Theme functions and definitions
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

/**
 * prints head prefix.
 */
if ( ! function_exists( 'fleur_head_prefix' ) ) :
function fleur_head_prefix() {
	$head_prefix_fb = 'fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#';

	if ( is_home() || is_front_page() ) {
		$head_prefix_fb = 'fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#';
	}

	$head_prefix = 'og: http://ogp.me/ns# ' . $head_prefix_fb;
	$head_prefix = apply_filters( 'fleur_head_prefix_text', $head_prefix );

	return $head_prefix;
}
endif;

/**
 * Checks to see if we're on the homepage or not.
 */
if ( ! function_exists( 'fleur_is_frontpage' ) ) :
function fleur_is_frontpage() {
	return ( is_front_page() && ! is_home() );
}
endif;

/**
 * Check if WordPress version is above 4.7.
 */
if ( ! function_exists( 'fleur_is_wp_version' ) ) :
function fleur_is_wp_version() {
	if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
		return false;
	} else {
		return true;
	}
}
endif;
