<?php
/**
 * Display footer navigation.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

if ( ! has_nav_menu( 'footer-menu' ) ) {
	return;
}
?>

<div class="c-navigation-footer">
	<nav class="c-footer-menu" role="navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'fleur' ); ?>">
		<?php wp_nav_menu( array(
			'theme_location' => 'footer-menu',
			'menu_class'     => 'c-footer-menu-links',
			'depth'          => 1,
		) ); ?>
	</nav>
</div>
