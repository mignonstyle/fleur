<?php
/**
 * Display widgets at the top of the content
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

if ( is_active_sidebar( 'content-top-widget-area' ) && is_single() ) : ?>

	<div class="c-content-widget c-content-widget__top">
		<?php dynamic_sidebar( 'content-top-widget-area' ); ?>
	</div><!-- /.c-content-widget__top --->

<?php endif; ?>
