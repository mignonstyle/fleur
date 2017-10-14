<?php
/**
 * Default content width function
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function fleur_content_width() {
	// default size.
	$content_width = 1200;

	// Filter content width of the theme.
	$content_width = apply_filters( 'fleur_content_width', $content_width );
}
add_action( 'template_redirect', 'fleur_content_width', 0 );
