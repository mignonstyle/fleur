<?php
/**
 * functions and definitions
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

 /**
 * Sets up theme defaults and registers support
 */
function fleur_setup() {
	// Make theme available for translation.
	// Translations can be filed in the /languages/ directory.
	load_theme_textdomain( 'fleur', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// This theme styles the visual editor to resemble the theme style, specifically font, colors, and column width.
	//add_editor_style( array( 'assets/css/editor-style.css', fleur_fonts_url() ) );
}
add_action( 'after_setup_theme', 'fleur_setup' );
