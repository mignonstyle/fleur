<?php
/**
 * Display social navigation.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

if ( ! has_nav_menu( 'social-menu' ) ) {
	return;
}
?>

<div class="c-navigation-social">
	<nav class="c-social-menu" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'fleur' ); ?>">
		<?php wp_nav_menu( array(
			'theme_location' => 'social-menu',
			'menu_class'     => 'c-social-menu__links',
			'depth'          => 1,
			'link_before'    => '<span class="screen-reader-text">',
			'link_after'     => '</span><i class="fa fa-link" aria-hidden="true"></i>',
		) ); ?>
	</nav>
</div>
