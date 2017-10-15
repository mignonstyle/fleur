<?php
/**
 * The template for displaying all single posts
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

get_header(); ?>

<div class="l-wrap">
	<div id="primary" class="l-content__area">
		<main id="main" class="l-site__main" role="main">

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content/content' );

				// If comments are open or we have at least one comment, load up the comment template.
				comments_template();

				// Displays the navigation to next/previous post, when applicable.
				get_template_part( 'template-parts/navigation/prevnext', 'post' );

			endwhile;
			?>

		</main><!-- /#main -->
	</div><!-- /#primary -->

	<?php get_sidebar(); ?>
</div><!-- /.wrap -->

<?php get_footer();
