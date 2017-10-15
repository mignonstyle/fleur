<?php
/**
 * The template for displaying archive pages
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

get_header(); ?>

<div class="l-wrap">
	<div id="primary" class="l-content__area">
		<main id="main" class="l-site__main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="c-page__header">
					<?php
						the_archive_title( '<h1 class="c-page__title">', '</h1>' );
						the_archive_description( '<div class="c-taxonomy__description">', '</div>' );
					?>
				</header><!-- /.c-page__header -->

				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content/content' );

				endwhile;

				// pagination of posts.
				get_template_part( 'template-parts/navigation/pagination', 'posts' );

			else :

				get_template_part( 'template-parts/content/content', 'none' );

			endif;
			?>

		</main><!-- /#main -->
	</div><!-- /#primary -->

	<?php get_sidebar(); ?>
</div><!-- /.l-wrap -->

<?php get_footer(); ?>
