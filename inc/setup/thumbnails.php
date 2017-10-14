<?php
/**
 * Thumbnails settings functions.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

/**
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @return void
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
 * @link https://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
 * @link https://developer.wordpress.org/reference/functions/add_image_size/
 */
function fleur_setup_thumbnails() {
	add_theme_support( 'post-thumbnails' );

	// Set the default Featured Image (formerly Post Thumbnail) dimensions.
	set_post_thumbnail_size( 720, 500, true );

	// Register a new image size.
	add_image_size( 'fleur-featured-image', 1200, 630, true );
	add_image_size( 'fleur-thumbnail-avatar', 100, 100, true );
}
add_action( 'after_setup_theme', 'fleur_setup_thumbnails' );
