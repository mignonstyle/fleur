<?php
/**
 * The template for displaying all pages
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

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				comments_template();

			endwhile;
			?>

		</main><!-- /#main -->
	</div><!-- /#primary -->

	<?php get_sidebar(); ?>
</div><!-- /.wrap -->

<?php get_footer();
