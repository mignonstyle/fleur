<?php
/**
 * Display posts pagination.
 *
 * @package   fleur
 * @copyright Mignon Style
 * @version   1.0
 */

$prev_icon = '<i class="fa fa-angle-left" aria-hidden="true"></i>';
$next_icon = '<i class="fa fa-angle-right" aria-hidden="true"></i>';

$nav_text = '<span class="screen-reader-text">%s</span>';

$prev_text = sprintf(
	$nav_text,
	__( 'Previous page', 'fleur' )
);

$next_text = sprintf(
	$nav_text,
	__( 'Next page', 'fleur' )
);

$translated = __( 'Page', 'fleur' );

$args = array(
	'mid_size'           => 1,
	'prev_text'          => $prev_icon . $prev_text,
	'next_text'          => $next_text . $next_icon,
	'before_page_number' => '<span class="c-meta__nav screen-reader-text">' . $translated . ' </span>',
);

$args = apply_filters( 'fleur_posts_pagination_array', $args );
?>

<div class="c-page-nav c-posts-link-nav">
	<?php the_posts_pagination( $args ); ?>
</div><!-- /.c-page-nav -->
