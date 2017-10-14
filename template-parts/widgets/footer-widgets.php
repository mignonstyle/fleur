<?php
/**
 * Display footer widgets
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

if ( is_active_sidebar( 'footer-top-widget-area' ) ||
	 is_active_sidebar( 'footer-bottom-widget-area' ) ||
	 has_nav_menu( 'footer-menu' ) ) :
?>

<aside class="c-footer-widget c-widget-area" role="complementary">
	<?php if ( is_active_sidebar( 'footer-top-widget-area' ) ) : ?>
		<div class="c-widget-area__column c-footer-widget__top">
			<?php dynamic_sidebar( 'footer-top-widget-area' ); ?>
		</div><!-- /.c-widget-area__column -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-bottom-widget-area' ) ) : ?>
		<div class="c-widget-area__column c-footer-widget__bottom">
			<?php dynamic_sidebar( 'footer-bottom-widget-area' ); ?>
		</div><!-- /.c-widget-area__column -->
	<?php endif; ?>

	<?php
		// Display footer navigation.
		get_template_part( 'template-parts/navigation/menu', 'footer' );
	?>
</aside><!-- /.c-footer-widget -->

<?php endif;
