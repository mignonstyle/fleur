<?php
/**
 * Enqueue scripts and styles.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

/**
 * Register Google fonts.
 */
function fleur_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Lato, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$lato = _x( 'on', 'Lato font: on or off', 'fleur' );

	if ( 'off' !== $lato ) {
		$font_families = array();

		$font_families[] = 'Lato:300,400,700';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Add preconnect for Google Fonts.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_resource_hints/
 */
function fleur_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'fleur-google-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'fleur_resource_hints', 10, 2 );

/**
 * This theme styles the visual editor to resemble the theme styles.
 *
 * @link https://developer.wordpress.org/reference/functions/add_editor_style/
 */
function fleur_setup_editor_style() {
	add_editor_style( array( 'assets/css/editor-style.css', fleur_fonts_url() ) );
}
add_action( 'after_setup_theme', 'fleur_setup_editor_style' );

/**
 * Enqueue scripts and styles.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 */
function fleur_enqueue_scripts() {
	$theme   = wp_get_theme();
	$version = $theme->get( 'Version' );

	// Add Google fonts, used in the main stylesheet.
	wp_enqueue_style( 'fleur-google-fonts', fleur_fonts_url(), array(), null );

	// font-awesome.
	wp_enqueue_style( 'fleur-font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css', array() );

	// Theme stylesheet.
	wp_enqueue_style( 'fleur-style', get_template_directory_uri() . '/style.css', array(), $version );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'fleur-ie', get_template_directory_uri() . '/assets/css/ie.css', array( 'fleur-style' ), $version );
	wp_style_add_data( 'fleur-ie', 'conditional', 'lt IE 9' );

	// add comment reply.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fleur_enqueue_scripts' );
