<?php
/**
 * Template part for displaying posts
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'c-entry__post' ); ?>>
	<header class="c-entry__header">
		<?php
			if ( is_singular() ) {
				the_title( '<h1 class="c-entry__title">', '</h1>' );
			} else {
				the_title( '<h2 class="c-entry__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		?>

		<?php get_template_part( 'template-parts/post/entry', 'meta' ); ?>
	</header><!-- /.c-entry__header -->

	<div class="c-entry__content">
		<?php get_template_part( 'template-parts/widgets/content-top', 'widgets' ); ?>

		<?php the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fleur' ),
			get_the_title()
		) ); ?>

		<?php
		// Displays page-links for paginated posts. <!--nextpage--> tags.
		get_template_part( 'template-parts/navigation/pagination', 'page' );
		?>

		<?php get_template_part( 'template-parts/post/entry', 'footer' ); ?>

		<?php get_template_part( 'template-parts/widgets/content-bottom', 'widgets' ); ?>
	</div><!-- /.c-entry__content -->

</article><!-- /#post-## -->
