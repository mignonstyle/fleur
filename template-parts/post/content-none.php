<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

?>

<section class="c-no-results c-not-found">
	<header class="c-page__header">
		<h1 class="c-page__title"><?php esc_html_e( 'Nothing Found', 'fleur' ); ?></h1>
	</header><!-- /.c-page__header -->

	<div class="c-page__content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p class="c-page__content__meggase"><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'fleur' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php else : ?>

			<p class="c-page__content__meggase"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'fleur' ); ?></p>

			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- /.c-page__content -->
</section><!-- /.c-no-results -->
