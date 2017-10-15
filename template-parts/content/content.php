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

			get_template_part( 'template-parts/content/entry', 'meta' );
		?>
	</header><!-- /.c-entry__header -->

	<div class="c-entry__content">
		<?php
			get_template_part( 'template-parts/widgets/content-top', 'widgets' );

			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fleur' ),
				get_the_title()
			) );

			// Displays page-links for paginated posts. <!--nextpage--> tags.
			get_template_part( 'template-parts/navigation/pagination', 'page' );

			get_template_part( 'template-parts/content/entry', 'footer' );

			get_template_part( 'template-parts/widgets/content-bottom', 'widgets' );
		?>
	</div><!-- /.c-entry__content -->

</article><!-- /#post-## -->
