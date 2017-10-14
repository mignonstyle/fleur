<?php
/**
 * Custom header implementation.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @link https://codex.wordpress.org/Custom_Headers
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#custom-header
 */
function fleur_custom_header_setup() {
	// Custom header default settings.
	$defaults = array(
		'default-image'      => get_template_directory_uri() . 'assets/images/header/header.png',
		'width'              => 1200,
		'height'             => 630,
		'flex-height'        => true,
		'flex-width'         => true,
		'video'              => true,
		'wp-head-callback'   => 'fleur_header_style',
		'default-text-color' => '333',
	);

	// Filter the arguments used when adding 'custom-header' support.
	add_theme_support( 'custom-header', apply_filters( 'fleur_custom_header_args', $defaults ) );

	// Custom header default images.
	register_default_headers( array(
		'image01' => array(
			'url'           => '%s/assets/images/header/header01.png',
			'thumbnail_url' => '%s/assets/images/header/header01-s.png',
			'description'   => __( 'Default Header Image 01', 'fleur' ),
		),
		'image02' => array(
			'url'           => '%s/assets/images/header/header02.png',
			'thumbnail_url' => '%s/assets/images/header/header02-s.png',
			'description'   => __( 'Default Header Image 02', 'fleur' ),
		),
		'image03' => array(
			'url'           => '%s/assets/images/header/header03.png',
			'thumbnail_url' => '%s/assets/images/header/header03-s.png',
			'description'   => __( 'Default Header Image 03', 'fleur' ),
		),
		'image04' => array(
			'url'           => '%s/assets/images/header/header04.png',
			'thumbnail_url' => '%s/assets/images/header/header04-s.png',
			'description'   => __( 'Default Header Image 04', 'fleur' ),
		),
	) );
}
add_action( 'after_setup_theme', 'fleur_custom_header_setup' );

/**
 * Styles the header image and text displayed on the blog.
 *
 * @see fleur_custom_header_setup().
 */
if ( ! function_exists( 'fleur_header_style' ) ) :
function fleur_header_style() {
	$header_text_color = get_header_textcolor();

	// get_header_textcolor() options: add_theme_support( 'custom-header' ) is default, hide text (returns 'blank') or any hex value.
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style id="fleur-custom-header-styles" type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' === $header_text_color ) :
	?>
		.c-site-branding__title,
		.c-site-branding__description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.c-site-branding__title a,
		.c-site-branding__description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;

/**
 * Customize video play/pause button in the custom header.
 */
function fleur_video_controls( $settings ) {
	$video_play_icon  = '<i class="fa fa-play" aria-hidden="true"></i>';
	$video_pause_icon = '<i class="fa fa-pause" aria-hidden="true"></i>';

	$settings['l10n']['play']  = '<span class="screen-reader-text">' . __( 'Play background video', 'fleur' ) . '</span>' . $video_play_icon;
	$settings['l10n']['pause'] = '<span class="screen-reader-text">' . __( 'Pause background video', 'fleur' ) . '</span>' . $video_pause_icon;

	return $settings;
}
add_filter( 'header_video_settings', 'fleur_video_controls' );
