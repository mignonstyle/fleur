<?php
/**
 * The template for displaying the header
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head<?php echo ( ! empty( fleur_head_prefix() ) ) ? ' prefix="' . esc_attr( fleur_head_prefix() ) . '"' : ''; ?>>

<?php wp_head(); ?>
</head>

<body <?php body_class( 'l-body' ); ?>>
<div id="page" class="l-site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fleur' ); ?></a>

	<header id="masthead" class="l-site-header" role="banner">
		<?php
		if ( fleur_is_frontpage() ) {
			// Display global navigation.
			get_template_part( 'template-parts/navigation/menu', 'global' );

			// Displays header site branding.
			get_template_part( 'template-parts/header/site', 'branding' );

			// Displays header media.
			get_template_part( 'template-parts/header/header', 'image' );
		} else {
			// Displays header media.
			get_template_part( 'template-parts/header/header', 'image' );

			// Displays header site branding.
			get_template_part( 'template-parts/header/site', 'branding' );

			// Display global navigation.
			get_template_part( 'template-parts/navigation/menu', 'global' );
		} ?>
	</header><!-- #masthead -->

	<?php
	if ( ! fleur_is_frontpage() ) {
		// Display the featured image.
		get_template_part( 'template-parts/header/featured', 'image' );
	}

	if ( ! ( is_home() || is_front_page() ) ) {
		// Display the breadcrumb navigation.
		get_template_part( 'template-parts/navigation/breadcrumb' );
	} ?>

	<div class="l-site-contents">
		<div id="content" class="l-site-contents__inner">
