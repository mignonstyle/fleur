<?php
/**
 * Displays header featured-image
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

?>

<?php if ( is_singular() && has_post_thumbnail() ) : ?>
	<div class="c-featured-image-header post-thumbnail">
		<?php the_post_thumbnail( 'fleur-featured-image' ); ?>
	</div><!-- /.c-featured-image-header -->
<?php endif; ?>
