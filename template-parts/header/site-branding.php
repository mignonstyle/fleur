<?php
/**
 * Displays header site branding
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

?>
<div class="c-site-branding">
	<div class="c-container">

		<?php if ( has_custom_logo() ) : ?>
			<div class="c-site-branding__logo">
				<?php the_custom_logo(); ?>
			</div><!-- /.c-site-branding__logo -->
		<?php endif; ?>

		<div class="c-site-branding__texts">
			<h1 class="c-site-branding__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<?php
			$description = get_bloginfo( 'description', 'display' );

			if ( $description || is_customize_preview() ) :
			?>
				<p class="c-site-branding__description"><?php echo esc_html( $description ); ?></p>
			<?php endif; ?>
		</div><!-- /.c-site-branding__texts -->

	</div><!-- /.c-container -->
</div><!-- /.c-site-branding -->
