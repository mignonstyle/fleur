<?php
/**
 * The template for displaying search results pages
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

get_header();
?>

<div class="l-wrap">
	<div id="primary" class="l-content__area">
		<main id="main" class="l-site__main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="c-page__header">
					<h1 class="c-page__title"><?php printf( esc_html__( 'Search Results for: %s', 'fleur' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- /.c-page__header -->

				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content/content' );

				endwhile;

				// pagination of posts.
				get_template_part( 'template-parts/navigation/pagination', 'posts' );

			else : ?>

				<header class="c-page__header">
					<h1 class="c-page__title"><?php esc_html_e( 'Nothing Found', 'fleur' ); ?></h1>
				</header><!-- /.c-page__header -->

				<div class="c-page__content">
					<p class="c-page__content__meggase"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'fleur' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- /.page-content -->

			<?php endif; ?>

		</main><!-- /#main -->
	</div><!-- /#primary -->

	<?php get_sidebar(); ?>
</div><!-- /.wrap -->

<?php get_footer();
