<?php
/**
 * Custom logo function.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

/**
 * Set up the WordPress core custom logo.
 */
function fleur_custom_logo_setup() {
	// Custom logo default settings.
	$defaults = array(
		'width'       => 320,
		'height'      => 320,
		'flex-width'  => true,
		'flex-height' => true,
	);

	// Filter the arguments used when adding 'custom-logo' support.
	add_theme_support( 'custom-logo', apply_filters( 'fleur_custom_logo_args', $defaults ) );
}
add_action( 'after_setup_theme', 'fleur_custom_logo_setup' );

/**
 * Corresponding custom logo to Retina.
 */
function fleur_wp_head_custom_logo() {
	$custom_logo = get_custom_logo();
	if ( ! $custom_logo ) {
		return;
	}

	// Set the height of custom logo.
	preg_match( '/height="(\d+?)"/', $custom_logo, $reg );
	if ( ! isset( $reg[1] ) ) {
		return;
	}
	$height = $reg[1];

	// Set the width of custom logo.
	preg_match( '/width="(\d+?)"/', $custom_logo, $reg );
	if ( ! isset( $reg[1] ) ) {
		return;
	}
	$width = $reg[1];
	?>

	<style>
	.c-site-branding__logo .custom-logo { height: <?php echo esc_html( $height / 2 ); ?>px; width: <?php echo esc_html( $width / 2 ); ?>px; }
	</style>

<?php
}
add_action( 'wp_head', 'fleur_wp_head_custom_logo' );
