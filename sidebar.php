<?php
/**
 * The sidebar containing the main widget area
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

if ( is_active_sidebar( 'sidebar-top-widget-area' ) ||
	 is_active_sidebar( 'sidebar-widget-area' ) ||
	 is_active_sidebar( 'sidebar-bottom-widget-area' ) ||
	 is_active_sidebar( 'archive-sidebar-widget-area' ) ) :
?>

<aside id="secondary" class="l-sidebar-widget c-widget-area" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-top-widget-area' ) ) : ?>
		<div class="c-widget-area__column c-sidebar-widget__top">
			<?php dynamic_sidebar( 'sidebar-top-widget-area' ); ?>
		</div><!-- /.c-widget-area__column -->
	<?php endif; ?>

	<?php if ( is_archive() ) : ?>
		<?php if ( is_active_sidebar( 'archive-sidebar-widget-area' ) ) : ?>
			<div class="c-widget-area__column c-sidebar-widget__center">
				<?php dynamic_sidebar( 'archive-sidebar-widget-area' ); ?>
			</div><!-- /.c-widget-area__column -->
		<?php endif; ?>
	<?php else : ?>
		<?php if ( is_active_sidebar( 'sidebar-widget-area' ) ) : ?>
			<div class="c-widget-area__column c-sidebar-widget__center">
				<?php dynamic_sidebar( 'sidebar-widget-area' ); ?>
			</div><!-- /.c-widget-area__column -->
		<?php endif; ?>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-bottom-widget-area' ) ) : ?>
		<div class="c-widget-area__column c-sidebar-widget__bottom">
			<?php dynamic_sidebar( 'sidebar-bottom-widget-area' ); ?>
		</div><!-- /.c-widget-area__column -->
	<?php endif; ?>
</aside><!-- #secondary -->

<?php endif; ?>
