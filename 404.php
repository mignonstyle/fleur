<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

get_header(); ?>

<div class="l-wrap">
	<div id="primary" class="l-content__area">
		<main id="main" class="l-site__main" role="main">

			<section class="c-error-404 c-not-found">
				<header class="c-page__header">
					<h1 class="c-page__title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fleur' ); ?></h1>
				</header><!-- /.c-page__header -->

				<div class="c-page__content">
					<p class="c-page__content__meggase"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'fleur' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- /.page-content -->
			</section><!-- /.c-error-404 -->
		</main><!-- /#main -->
	</div><!-- /#primary -->
</div><!-- /.wrap -->

<?php get_footer();
