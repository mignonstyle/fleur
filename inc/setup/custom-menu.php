<?php
/**
 * Enable custom menu functions.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

/**
 * This theme uses wp_nav_menu().
 */
function fleur_custom_menu_setup() {
	register_nav_menus( array(
		'global-menu' => esc_html__( 'Global Menu', 'fleur' ),
		'footer-menu' => esc_html__( 'Footer Menu', 'fleur' ),
		'social-menu' => esc_html__( 'Social Links Menu', 'fleur' ),
	) );
}
add_action( 'after_setup_theme', 'fleur_custom_menu_setup' );
