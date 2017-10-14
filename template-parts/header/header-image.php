<?php
/**
 * Displays header media
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

?>

<?php if ( fleur_is_frontpage() && has_custom_header() ) : ?>
	<div class="c-custom-header">
		<div class="c-custom-header__media">
			<?php if ( fleur_is_wp_version() ) : ?>
				<?php the_custom_header_markup(); ?>
			<?php else : ?>
				<img src="<?php header_image(); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
			<?php endif; ?>
		</div><!-- /.c-custom-header__media -->
	</div><!-- /.c-custom-header -->
<?php endif; ?>
