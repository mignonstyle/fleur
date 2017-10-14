<?php
/**
 * functions and definitions
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

/**
 * Sets up theme defaults and registers support.
 */
function fleur_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/load_theme_textdomain
	 */
	load_theme_textdomain( 'fleur', get_template_directory() . '/languages' );

	/*
	 * Add default posts and comments RSS feed links to head.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#feed-links
	 */
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#post-formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	/*
	 * Add theme support for selective refresh for widgets.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets
	 */
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'fleur_setup' );

/**
 * Include the theme setup functions.
 */
foreach ( glob( get_template_directory() . '/inc/setup/*.php' ) as $theme_files ) {
	require $theme_files;
}

/**
 * Include the theme functions.
 */
foreach ( glob( get_template_directory() . '/inc/functions/*.php' ) as $theme_files ) {
	require $theme_files;
}
