<?php
/**
 * Display widgets at the bottom of the content
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

if ( is_active_sidebar( 'content-bottom-widget-area' ) && is_single() ) : ?>

	<div class="c-content-widget c-content-widget__bottom">
		<?php dynamic_sidebar( 'content-bottom-widget-area' ); ?>
	</div>

<?php endif; ?>
