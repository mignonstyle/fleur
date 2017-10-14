<?php
/**
 * Custom background implementation.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

/**
 * Set up the WordPress core custom background feature.
 */
function fleur_custom_background_setup_theme() {
	// Custom background default settings.
	$defaults = array(
		'default-color' => 'fff',
	);

	// Filter the arguments used when adding 'custom-background' support.
	add_theme_support( 'custom-background', apply_filters( 'fleur_custom_background_args', $defaults ) );
}
add_action( 'after_setup_theme', 'fleur_custom_background_setup_theme' );
