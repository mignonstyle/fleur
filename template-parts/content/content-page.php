<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'c-entry__post' ); ?>>
	<header class="c-entry__header">
		<?php the_title( '<h1 class="c-entry__title">', '</h1>' ); ?>
	</header><!-- /.c-entry__header -->

	<div class="c-entry__content">
		<?php
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fleur' ),
				get_the_title()
			) );

			// Displays page-links for paginated posts. <!--nextpage--> tags.
			get_template_part( 'template-parts/navigation/pagination', 'page' );

			get_template_part( 'template-parts/content/entry', 'footer' );
		?>
	</div><!-- /.c-entry__content -->

</article><!-- /#post-## -->
