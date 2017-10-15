<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

/**
 * Use front-page.php when Front page displays is set to a static page.
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function fleur_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'fleur_front_page_template' );

/**
 * Add meta tags in header.
 */
function fleur_add_meta_header() {
	echo '<meta charset="' . esc_attr( get_bloginfo( 'charset' ) ) . '">' . "\n";
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">' . "\n";
	echo '<link rel="profile" href="http://gmpg.org/xfn/11">' . "\n";
}
add_action( 'wp_head', 'fleur_add_meta_header', -9999 );
