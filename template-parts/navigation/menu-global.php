<?php
/**
 * Display global navigation.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

if ( ! has_nav_menu( 'global-menu' ) ) {
	return;
}
?>

<div class="c-navigation-global">
	<div class="c-container">
		<nav id="site-navigation" class="c-global-menu" role="navigation" aria-label="<?php esc_attr_e( 'Global Menu', 'fleur' ); ?>">

			<button class="c-menu__toggle" aria-controls="global-menu" aria-expanded="false">
				<i class="fa fa-bars" aria-hidden="true"></i>
				<i class="fa fa-times" aria-hidden="true"></i>
				<?php esc_html_e( 'Menu', 'fleur' ); ?>
			</button>

			<?php wp_nav_menu( array(
				'theme_location' => 'global-menu',
				'menu_id'        => 'global-menu-links',
			) ); ?>

		</nav>
	</div><!-- /.c-container -->
</div><!-- /.c-navigation-global -->
